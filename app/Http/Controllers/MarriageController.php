<?php

namespace App\Http\Controllers;

use App\Models\Marriage;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

/**
 * Class MarriageController
 * @package App\Http\Controllers
 */
class MarriageController extends Controller
{
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
        request()->validate(Marriage::$rules);

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
        request()->validate(Marriage::$rules);

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

	public function certificate(Marriage $marriage)
    {
		$pdf = App::make('dompdf.wrapper');
		$pdf->loadHTML('<h1>Test</h1>');
		return $pdf->stream();
		/*
		$dompdf = new Pdf();
		$dompdf->loadHtml('hello world');
		
		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'landscape');
		
		// Render the HTML as PDF
		$dompdf->render();
		
		// Output the generated PDF to Browser
		$dompdf->stream();/*
		$arrayBody = array(
			"#NumerodeLibro",
			"#NumerodePagina",
			"#CiudaddeCelebracion",
			"#LugardeCelebacion",
			"#Parroquia",
			"#FechadeCelebracion",
			"#Impedimiento",
			"#Celebrante",
			"#NombresEsposo",
			"#ApellidoPaternoEsposo",
			"#ApellidoMaternoEsposo",
			"#RutEsposo",
			"#EstadoEsposo",
			"#EdadEsposo",
			"#PadreEsposo",
			"#MadreEsposo",
			"#ParroquiaBautizoEsposo",
			"#NumeroLibroBautizoEsposo",
			"#NumeroPaginaBautizoEsposo",
			"#NombresEsposa",
			"#ApellidoPaternoEsposa",
			"#ApellidoMaternoEsposa",
			"#RutEsposa",
			"#EstadoEsposa",
			"#EdadEsposa",
			"#PadreEsposa",
			"#MadreEsposa",
			"#ParroquiaBautizoEsposa",
			"#NumeroLibroBautizoEsposa",
			"#NumeroPaginaBautizoEsposa",
			"#SiendoTestigo",
			"#Notas",
			"#PaginaPartida",
			"#Parroco",
			"#DoyFe"
		);

		$data = array(
			$marriage->NumLibro,
			$marriage->NumPag,
			$marriage->CiudadCelebracion,
			$marriage->LugardeCelebracion,
			$marriage->Parroquia,
			$marriage->FechaCelebracion,
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
			$marriage->PaginaPartida,
			$marriage->Parroco,
			$marriage->DoyFe
		);

		$pdf = App::make('dompdf.wrapper');
		$pdf->loadHTML(
			"
				<!DOCTYPE html>
					<head>
						<title>Certificado de Matrimonio</title>
						<style>
							
						</style>
					</head>
					<body>
					<div class=\"container\"></div>
						<header>
							certificateHeader
						</header>
						<section>
							{$data}
						</section>
						<footer>
							certificateFooter
						</footer>
					</body>
				</html>
			"
		);

		return $pdf->stream('certificadoMatrimonio.pdf');*/
	}
}
