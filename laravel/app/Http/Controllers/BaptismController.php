<?php

namespace App\Http\Controllers;

use App\Exports\BaptismsExport;
use App\Imports\BaptismsImport;
use App\Models\Baptism;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Excel;

/**
 * Class BaptismController
 * @package App\Http\Controllers
 */
class BaptismController extends Controller
{
	public function __construct() {
		$this->middleware('can:baptisms.index')->only('index');
		$this->middleware('can:baptisms.edit')->only('edit', 'update');
		$this->middleware('can:baptisms.create')->only('create', 'store');
		$this->middleware('can:baptisms.show')->only('show','certificate');
		$this->middleware('can:baptisms.destroy')->only('destroy');
		$this->middleware('can:baptisms.export')->only('exportBaptisms');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baptisms = Baptism::paginate();

        return view('baptism.index', compact('baptisms'))
            ->with('i', (request()->input('page', 1) - 1) * $baptisms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $baptism = new Baptism();
        return view('baptism.create', compact('baptism'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Baptism::$rules, Baptism::$message);

        $baptism = Baptism::create($request->all());

        return redirect()->route('baptisms.index')
            ->with('success', 'Bautismo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $baptism = Baptism::find($id);

        return view('baptism.show', compact('baptism'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $baptism = Baptism::find($id);

        return view('baptism.edit', compact('baptism'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Baptism $baptism
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Baptism $baptism)
    {
        request()->validate(array_slice(Baptism::$rules, 1), Baptism::$message);
        request()->validate(['Rut' => ['required','string','max:20','regex:/^([1-9]|[1-9][0-9]).([0-9]){3}.([0-9]){3}-([K]|[0-9])/']], Baptism::$message);

        $baptism->update($request->all());

        return redirect()->route('baptisms.index')
            ->with('success', 'Bautismo editado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $baptism = Baptism::find($id)->delete();

        return redirect()->route('baptisms.index')
            ->with('success', 'Bautismo eliminado exitosamente.');
    }

	public function exportBaptisms (Excel $csv) {
		return $csv->download(new BaptismsExport, 'tabla-bautizos.csv');
	}

	public function importView () {
		return view('imports.importView');
	}

	public function importBaptisms (Request $request) {
		$file = time() . '-' . $request->file('urlBackup')->getClientOriginalName();

		$import = new BaptismsImport;
		$import->import(request()->file('urlBackup'), 'public');

		if ($import->failures()->isNotEmpty()) {
			return back()->withFailures($import->failures());
		}

		$request->file('urlBackup')->storeAs('public/baptismsImport', $file);

        return redirect()->route('baptisms.index')
            ->with('success', 'Bautizos importados exitosamente.');
	}

	public function certificate(Baptism $baptism)
    {
		$pdf = App::make('dompdf.wrapper');
		$certificate = '<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Certificado de Bautizo</title>
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
						src="../../storage/app/public/utem.png" 
						alt="Logo de la Parroquia"
					>
					<h1 style = "position: absolute; top: 5%; left: 30%;">Certificado de Bautizo</h1>
					<hr>
				</div>
			</header>
			<section>
                <ul>
                    <li>Número libro: #NumerodeLibro</li>
                    <li>Número de página: #NumerodePagina</li>
                    <li>Lugar de celebración: #LugardeCelebracion</li>
                    <li>Celebrante: #Celebrante</li>
                    <li>Fecha de celenbración: #FechadeCelebracion</li>
                    <li>Nombres: #Bautizado</li>
                    <li>Apellido paterno: #ApellidoPaterno</li>
                    <li>Apellido materno: #ApellidoMaterno</li>
                    <li>Rut: #RutBautizado</p></li>
                    <li>Lugar de nacimiento: #LugardeNacimiento</li>
                    <li>Fecha de nacimiento: #FechadeNacimiento</li>
                    <li>Padre del Bautizado: #PapaNombre #PapaApellido</li>
                    <li>Madre del Bautizado: #MamaNombre #MamaApellido</li>
                    <li>Padrino: #Padrino</li>
                    <li>Madrina: #Madrina</li>
                    <li>Notas: #Notas</li>
                    <li>Doy fe: #DoyFe</li>
                    <li>Parroco: #Parroco</li>	
                </ul>
			</section>
			<footer>
				<img 
					src="../../storage/app/public/sello.png" 
					alt="Firma y/o Sello"
				>
			</footer>
		</body>
		</html>';
		$search = array(
			'#NumerodeLibro',
			'#NumerodePagina',
			'#LugardeCelebracion',
			'#Celebrante',
			'#FechadeCelebracion',
			'#Bautizado',
			'#ApellidoPaterno',
			'#ApellidoMaterno',
			'#RutBautizado',
			'#LugardeNacimiento',
			'#FechadeNacimiento',
			'#PapaNombre',
			'#PapaApellido',
			'#MamaNombre',
			'#MamaApellido',
			'#Padrino',
			'#Madrina',
			'#Notas',
			'#DoyFe',
			'#Parroco'
		);

		$replace = array(
			$baptism->NumLibro,
			$baptism->NumPag,
			$baptism->LugCel,
			$baptism->Ministro,
			$baptism->FecCel,
			$baptism->Nombres,
			$baptism->ApellidoPaterno,
			$baptism->ApellidoMaterno,
			$baptism->Rut,
			$baptism->LugNac,
			$baptism->FecNac,
			$baptism->PapaNombre,
			$baptism->PapaApellido,
			$baptism->MamaNombre,
			$baptism->MamaApellido,
			$baptism->Padrino,
			$baptism->Madrina,
			$baptism->Notas,
			$baptism->DoyFe,
			$baptism->Parroco
		);

		$certificate = str_replace($search, $replace, $certificate);
		$pdf->loadHTML($certificate);
		//$pdf->render();

		return $pdf->stream('certificadoBautizo.pdf');
	}
}
