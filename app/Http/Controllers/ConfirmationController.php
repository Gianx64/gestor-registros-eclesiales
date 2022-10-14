<?php

namespace App\Http\Controllers;

use App\Models\Confirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/**
 * Class ConfirmationController
 * @package App\Http\Controllers
 */
class ConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confirmations = Confirmation::paginate();

        return view('confirmation.index', compact('confirmations'))
            ->with('i', (request()->input('page', 1) - 1) * $confirmations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $confirmation = new Confirmation();
        return view('confirmation.create', compact('confirmation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Confirmation::$rules);

        $confirmation = Confirmation::create($request->all());

        return redirect()->route('confirmations.index')
            ->with('success', 'Confirmación creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $confirmation = Confirmation::find($id);

        return view('confirmation.show', compact('confirmation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $confirmation = Confirmation::find($id);

        return view('confirmation.edit', compact('confirmation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Confirmation $confirmation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Confirmation $confirmation)
    {
        request()->validate(Confirmation::$rules);

        $confirmation->update($request->all());

        return redirect()->route('confirmations.index')
            ->with('success', 'Confirmación editada exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $confirmation = Confirmation::find($id)->delete();

        return redirect()->route('confirmations.index')
            ->with('success', 'Confirmación eliminada exitosamente.');
    }

	public function certificate(Confirmation $confirmation)
    {
		$pdf = App::make('dompdf.wrapper');
		$certificate = '<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Certificado de Confirmación</title>
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
					<h1 style = "position: absolute; top: 5%; left: 30%;">Certificado de Confirmación</h1>
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
                    <li>Confirmado: #Confirmado</li>
                    <li>Apellido paterno: #ApellidoPaterno</li>
                    <li>Apellido materno: #ApellidoMaterno</li>
                    <li>Rut: #RutConfirmado</p></li>
                    <li>Padre del confirmado: #PapaNombre #PapaApellido</li>
                    <li>Madre del confirmado: #MamaNombre #MamaApellido</li>
                    <li>Lugar de bautizo: #LugardeBautizo</li>
                    <li>Fecha de bautizo: #FechadeBautizo</li>
                    <li>Número de libro de bautizo: #NumeroLibroBautizo</li>
                    <li>Página de libro de bautizo: #NumeroPaginaBautizo</li>
                    <li>Notas: #Notas</li>
                    <li>Doy fe: #DoyFe</li>
                    <li>Parroco: #Parroco</li>	
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
			'#NumerodeLibro',
			'#NumerodePagina',
			'#LugardeCelebracion',
			'#Celebrante',
			'#FechadeCelebracion',
			'#Confirmado',
			'#ApellidoPaterno',
			'#ApellidoMaterno',
			'#RutConfirmado',
			'#PapaNombre',
			'#PapaApellido',
			'#MamaNombre',
			'#MamaApellido',
			'#LugardeBautizo',
			'#FechadeBautizo',
			'#NumeroLibroBautizo',
			'#NumeroPaginaBautizo',
			'#Notas',
			'#DoyFe',
			'#Parroco'
		);

		$replace = array(
			$confirmation->NumLibro,
			$confirmation->NumPag,
			$confirmation->LugCel,
			$confirmation->Celebrante,
			$confirmation->FecCel,
			$confirmation->Nombres,
			$confirmation->ApellidoPaterno,
			$confirmation->ApellidoMaterno,
			$confirmation->Rut,
			$confirmation->PapaNombre,
			$confirmation->PapaApellido,
			$confirmation->MamaNombre,
			$confirmation->MamaApellido,
			$confirmation->LugarBautizo,
			$confirmation->FecBautizo,
			$confirmation->NumLibroBautizo,
			$confirmation->NumPagBautizo,
			$confirmation->Notas,
			$confirmation->DoyFe,
			$confirmation->Parroco
		);

		$certificate = str_replace($search, $replace, $certificate);
		$pdf->loadHTML($certificate);
		//$pdf->render();

		return $pdf->stream('certificadoConfirmacion.pdf');
	}
}
