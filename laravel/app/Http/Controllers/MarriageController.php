<?php

namespace App\Http\Controllers;

use App\Exports\MarriagesExport;
use App\Imports\MarriagesImport;
use App\Models\Marriage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Excel;

/**
 * Class MarriageController
 * @package App\Http\Controllers
 */
class MarriageController extends Controller
{
	public function __construct() {
		$this->middleware('can:marriages.index')->only('index');
		$this->middleware('can:marriages.edit')->only('edit', 'update');
		$this->middleware('can:marriages.create')->only('create', 'store');
		$this->middleware('can:marriages.show')->only('show','certificate');
		$this->middleware('can:marriages.destroy')->only('destroy');
		$this->middleware('can:marriages.export')->only('exportMarriages');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marriages = Marriage::paginate();

        return view('marriage.index', compact('marriages'))
            ->with('i', (request()->input('page', 1) - 1) * $marriages->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marriage = new Marriage();
        return view('marriage.create', compact('marriage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Marriage::$rules, Marriage::$message);

        $marriage = Marriage::create($request->all());

        return redirect()->route('marriages.index')
            ->with('success', 'Matrimonio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marriage = Marriage::find($id);

        return view('marriage.show', compact('marriage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marriage = Marriage::find($id);

        return view('marriage.edit', compact('marriage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Marriage $marriage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marriage $marriage)
    {
        request()->validate(Marriage::$rules, Marriage::$message);

        $marriage->update($request->all());

        return redirect()->route('marriages.index')
            ->with('success', 'Matrimonio editado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $marriage = Marriage::find($id)->delete();

        return redirect()->route('marriages.index')
            ->with('success', 'Matrimonio eliminado exitosamente.');
    }

	public function exportMarriages (Excel $csv) {
		return $csv->download(new MarriagesExport, 'tabla-matrimonios.csv');
	}

	public function importView () {
		return view('imports.importView');
	}

	public function importMarriage (Request $request) {
		$file = time() . '-' . $request->file('urlBackup')->getClientOriginalName();

		$import = new MarriagesImport;
		$import->import(request()->file('urlBackup'), 'public');

		if ($import->failures()->isNotEmpty()) {
			return back()->withFailures($import->failures());
		}

		$request->file('urlBackup')->storeAs('public/app/import/marriages', $file);

		return back()->with('informacion', 'import');
	}

	public function certificate(Marriage $marriage)
    {
		$pdf = App::make('dompdf.wrapper');
		$certificate = '<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Certificado de Matrimonio</title>
			<style>
				img {
					max-width: 20%;
					height: auto;	
				}
			</style>
		</head>
		<body>
			<header>
				<div class="container">
					<img
						src="../storage/app/public/utem.png" 
						alt="Logo de la Parroquia"
					>
					<h1 style = "position: absolute; top: 5%; left: 30%;">Certificado de Matrimonio</h1>
					<hr>
				</div>
			</header>
			<section>
				<table width="100%">
					<tr>
						<th><h3>Esposo</h3></th>
						<th><h3>Esposa</h3></th>
					</tr>
					<tr>
						<td>Nombres: #NombresEsposo</td>
						<td>Nombre: #NombresEsposa</td>
					</tr>
					<tr>
						<td>Apellido paterno: #ApellidoPaternoEsposo</td>
						<td>Apellido paterno: #ApellidoPaternoEsposa</td>
					</tr>
					<tr>
						<td>Apellido materno: #ApellidoMaternoEsposo</td>
						<td>Apellido materno: #ApellidoMaternoEsposa</td>
					</tr>
					<tr>
						<td>Rut: #RutEsposo</td>
						<td>Rut: #RutEsposa</td>
					</tr>
					<tr>
						<td>Estado: #EstadoEsposo</td>
						<td>Estado: #EstadoEsposa</td>
					</tr>
					<tr>
						<td>Edad: #EdadEsposo</td>
						<td>Edad: #EdadEsposa</td>
					</tr>
					<tr>
						<td>Padre: #PapaNombresEsposo</td>
						<td>Padre: #PapaNombresEsposa</td>
					</tr>
					<tr>
						<td>Madre: #MamaNombresEsposo</td>
						<td>Madre: #MamaNombresEsposa</td>
					</tr>
					<tr>
						<td>Parroquia del bautizo: #ParroquiaBautismoEsposo</td>
						<td>Parroquia del bautizo: #ParroquiaBautismoEsposa</td>
					</tr>
					<tr>
						<td>Número de libro de bautizo: #NumLibroBautismoEsposo</td>
						<td>Número de libro de bautizo: #NumLibroBautismoEsposa</td>
					</tr>
					<tr>
						<td>Número de página de bautizo: #NumPagBautismoEsposo</td>
						<td>Número de página de bautizo: #NumPagBautismoEsposa</td>
					</tr>
				</table>
				<h3>Matrimonio</h3>
				<ul>					
					<li>Número de libro: #NumLibro</li>
					<li>Número de página: #NumPag</li>
					<li>Lugar de celebración: #LugCel</li>
					<li>Parroquia: #Parroquia</li>
					<li>Fecha de Celebración: #FecCel</li>
					<li>Impedimiento: #Impedimiento</li>
					<li>Celebrante: #Celebrante</li>
					<li>Siendo testigo: #SiendoTestigo</li>
					<li>Notas: #Notas</li>
					<li>Parroco: #Parroco</li>
					<li>Doy fe: #DoyFe</li>
				</ul>
			</section>
			<footer>
				<img 
					src="../storage/app/public/sello.png" 
					alt="Firma y/o Sello"
				>
			</footer>
		</body>
		</html>';
		$search = array(
			"#LugCel",
			"#FecCel",
			"#Impedimiento",
			"#Celebrante",
			"#NombresEsposo",
			"#ApellidoPaternoEsposo",
			"#ApellidoMaternoEsposo",
			"#RutEsposo",
			"#EstadoEsposo",
			"#EdadEsposo",
			"#PapaNombresEsposo",
			"#MamaNombresEsposo",
			"#ParroquiaBautismoEsposo",
			"#NumLibroBautismoEsposo",
			"#NumPagBautismoEsposo",
			"#NombresEsposa",
			"#ApellidoPaternoEsposa",
			"#ApellidoMaternoEsposa",
			"#RutEsposa",
			"#EstadoEsposa",
			"#EdadEsposa",
			"#PapaNombresEsposa",
			"#MamaNombresEsposa",
			"#ParroquiaBautismoEsposa",
			"#NumLibroBautismoEsposa",
			"#NumPagBautismoEsposa",
			"#SiendoTestigo",
			"#Notas",
			"#Parroco",
			"#DoyFe",
			"#Parroquia",
			"#NumLibro",
			"#NumPag",
		);

		$replace = array(
			$marriage->LugCel,
			$marriage->FecCel,
			$marriage->Impedimiento,
			$marriage->Celebrante,
			$marriage->NombresEsposo,
			$marriage->ApellidoPaternoEsposo,
			$marriage->ApellidoMaternoEsposo,
			$marriage->RutEsposo,
			$marriage->EstadoEsposo,
			$marriage->EdadEsposo,
			$marriage->PapaNombresEsposo,
			$marriage->MamaNombresEsposo,
			$marriage->ParroquiaBautismoEsposo,
			$marriage->NumLibroBautismoEsposo,
			$marriage->NumPagBautismoEsposo,
			$marriage->NombresEsposa,
			$marriage->ApellidoPaternoEsposa,
			$marriage->ApellidoMaternoEsposa,
			$marriage->RutEsposa,
			$marriage->EstadoEsposa,
			$marriage->EdadEsposa,
			$marriage->PapaNombresEsposa,
			$marriage->MamaNombresEsposa,
			$marriage->ParroquiaBautismoEsposa,
			$marriage->NumLibroBautismoEsposa,
			$marriage->NumPagBautismoEsposa,
			$marriage->SiendoTestigo,
			$marriage->Notas,
			$marriage->Parroco,
			$marriage->DoyFe,
			$marriage->Parroquia,
			$marriage->NumLibro,
			$marriage->NumPag,
		);

		$certificate = str_replace($search, $replace, $certificate);
		$pdf->loadHTML($certificate);
		//$pdf->render();

		return $pdf->stream('certificadoMatrimonio.pdf');
	}
}
