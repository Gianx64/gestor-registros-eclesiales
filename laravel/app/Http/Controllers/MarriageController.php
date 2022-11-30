<?php

namespace App\Http\Controllers;

use App\Exports\MarriagesExport;
use App\Imports\MarriagesImport;
use App\Models\Chapel;
use App\Models\Marriage;
use App\Models\ParishPriest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
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
		$this->middleware('can:marriages.import')->only('importView', 'importMarriages');
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
        $chapels = Chapel::all()->pluck('Nombre', 'Nombre');
        $parishpriests = ParishPriest::all()->pluck('Nombre', 'Nombre');

        return view('marriage.create', compact('marriage', 'chapels', 'parishpriests'));
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
        $chapels = Chapel::all()->pluck('Nombre', 'Nombre');
        $parishpriests = ParishPriest::all()->pluck('Nombre', 'Nombre');

        return view('marriage.edit', compact('marriage', 'chapels', 'parishpriests'));
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
        request()->validate(array_slice(Marriage::$rules, 2), Marriage::$message);
        request()->validate(['RutEsposo' => ['required','string','max:20','regex:/^([1-9]|[1-9][0-9]).([0-9]){3}.([0-9]){3}-([K]|[0-9])/'],
        					 'RutEsposa' => ['required','string','max:20','regex:/^([1-9]|[1-9][0-9]).([0-9]){3}.([0-9]){3}-([K]|[0-9])/']], Marriage::$message);

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

	public function importMarriages (Request $request) {
		$file = time() . '-' . $request->file('urlBackup')->getClientOriginalName();

		$import = new MarriagesImport;
		$import->import(request()->file('urlBackup'), 'public');

		if ($import->failures()->isNotEmpty()) {
			return back()->withFailures($import->failures());
		}

		$request->file('urlBackup')->storeAs('public/marriagesImport', $file);

        return redirect()->route('marriages.index')
            ->with('success', 'Matrimonios importados exitosamente.');
	}

	public function certificate(Marriage $marriage)
    {
		$pdf = App::make('dompdf.wrapper');
		$certificate = DB::table('certificates')->where('Nombre', 'matrimonio')->value('Codigo');
		$search = array(
			'#NumerodeLibro',
			'#NumerodePagina',
			'#LugardeCelebracion',
			'#FechadeCelebracion',
			'#Impedimento',
			'#Celebrante',
			'#NombresEsposo',
			'#ApellidoPaternoEsposo',
			'#ApellidoMaternoEsposo',
			'#RutEsposo',
			'#EstadoEsposo',
			'#EdadEsposo',
			'#PapaNombresEsposo',
			'#MamaNombresEsposo',
			'#ParroquiaBautismoEsposo',
			'#NumLibroBautismoEsposo',
			'#NumPagBautismoEsposo',
			'#NombresEsposa',
			'#ApellidoPaternoEsposa',
			'#ApellidoMaternoEsposa',
			'#RutEsposa',
			'#EstadoEsposa',
			'#EdadEsposa',
			'#PapaNombresEsposa',
			'#MamaNombresEsposa',
			'#ParroquiaBautismoEsposa',
			'#NumLibroBautismoEsposa',
			'#NumPagBautismoEsposa',
			'#SiendoTestigo',
			'#Notas',
			'#Parroco',
			'#DoyFe',
			'#Parroquia',
		);
		$replace = array(
			$marriage->NumLibro,
			$marriage->NumPag,
			$marriage->LugCel,
			$marriage->FecCel,
			$marriage->Impedimento,
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
		);

		$certificate = str_replace($search, $replace, $certificate);
		$pdf->loadHTML($certificate);
		//$pdf->render();

		return $pdf->stream('certificadoMatrimonio.pdf');
	}
}
