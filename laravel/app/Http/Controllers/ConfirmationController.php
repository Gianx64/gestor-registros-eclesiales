<?php

namespace App\Http\Controllers;

use App\Exports\ConfirmationsExport;
use App\Imports\ConfirmationsImport;
use App\Models\Chapel;
use App\Models\Confirmation;
use App\Models\ParishPriest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel;

/**
 * Class ConfirmationController
 * @package App\Http\Controllers
 */
class ConfirmationController extends Controller
{
	public function __construct() {
		$this->middleware('can:confirmations.index')->only('index');
		$this->middleware('can:confirmations.edit')->only('edit', 'update');
		$this->middleware('can:confirmations.create')->only('create', 'store');
		$this->middleware('can:confirmations.show')->only('show','certificate');
		$this->middleware('can:confirmations.destroy')->only('destroy');
		$this->middleware('can:confirmations.export')->only('exportConfirmations');
		$this->middleware('can:confirmations.import')->only('importView', 'importConfirmations');
	}

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
        $chapels = Chapel::all()->pluck('Nombre', 'Nombre');
        $parishpriests = ParishPriest::all()->pluck('Nombre', 'Nombre');

        return view('confirmation.create', compact('confirmation', 'chapels', 'parishpriests'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Confirmation::$rules, Confirmation::$message);

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
        $chapels = Chapel::all()->pluck('Nombre', 'Nombre');
        $parishpriests = ParishPriest::all()->pluck('Nombre', 'Nombre');

        return view('confirmation.edit', compact('confirmation', 'chapels', 'parishpriests'));
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
        request()->validate(array_slice(Confirmation::$rules, 1), Confirmation::$message);
        request()->validate(['Rut' => ['required','string','max:20','regex:/^([1-9]|[1-9][0-9]).([0-9]){3}.([0-9]){3}-([K]|[0-9])/']], Confirmation::$message);

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

	public function exportConfirmations (Excel $csv) {
		return $csv->download(new ConfirmationsExport, 'tabla-confirmaciones.csv');
	}

	public function importView () {
		return view('imports.importView');
	}

	public function importConfirmations (Request $request) {
		$file = time() . '-' . $request->file('urlBackup')->getClientOriginalName();

		$import = new ConfirmationsImport;
		$import->import(request()->file('urlBackup'), 'public');

		if ($import->failures()->isNotEmpty()) {
			return back()->withFailures($import->failures());
		}

		$request->file('urlBackup')->storeAs('public/confirmationsImport', $file);

        return redirect()->route('confirmations.index')
            ->with('success', 'Confirmaciones importadas exitosamente.');
	}

	public function certificate(Confirmation $confirmation)
    {
		$pdf = App::make('dompdf.wrapper');
		$certificate = DB::table('certificates')->where('Nombre', 'confirmacion')->value('Codigo');
		$search = array(
			'#NumerodeLibro',
			'#NumerodePagina',
			'#LugardeCelebracion',
			'#FechadeCelebracion',
			'#Celebrante',
			'#Nombres',
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
			'#Parroco',
		);

		$replace = array(
			$confirmation->NumLibro,
			$confirmation->NumPag,
			$confirmation->LugCel,
			$confirmation->FecCel,
			$confirmation->Celebrante,
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