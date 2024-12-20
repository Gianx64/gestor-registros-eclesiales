<?php

namespace App\Http\Controllers;

use App\Exports\BaptismsExport;
use App\Imports\BaptismsImport;
use App\Models\Chapel;
use App\Models\Baptism;
use App\Models\ParishPriest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
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
		$this->middleware('can:baptisms.import')->only('importView', 'importBaptisms');
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
        $chapels = Chapel::all()->pluck('Nombre', 'Nombre');
        $parishpriests = ParishPriest::all()->pluck('Nombre', 'Nombre');

        return view('baptism.create', compact('baptism', 'chapels', 'parishpriests'));
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
        $chapels = Chapel::all()->pluck('Nombre', 'Nombre');
        $parishpriests = ParishPriest::all()->pluck('Nombre', 'Nombre');

        return view('baptism.edit', compact('baptism', 'chapels', 'parishpriests'));
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
		$certificate = DB::table('certificates')->where('Nombre', 'bautismo')->value('Codigo');
		$search = array(
			'#NumerodeLibro',
			'#NumerodePagina',
			'#LugardeCelebracion',
			'#FechadeCelebracion',
			'#Ministro',
			'#Nombres',
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
			'#Parroco',
		);

		$replace = array(
			$baptism->NumLibro,
			$baptism->NumPag,
			$baptism->LugCel,
			$baptism->FecCel,
			$baptism->Ministro,
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
