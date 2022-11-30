<?php

namespace App\Http\Controllers;

use App\Models\ParishPriest;
use Illuminate\Http\Request;

/**
 * Class ParishPriestController
 * @package App\Http\Controllers
 */
class ParishPriestController extends Controller
{
	public function __construct() {
		$this->middleware('can:parishpriests.index')->only('index');
		$this->middleware('can:parishpriests.edit')->only('edit', 'update');
		$this->middleware('can:parishpriests.create')->only('create', 'store');
		$this->middleware('can:parishpriests.destroy')->only('destroy');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parishPriests = ParishPriest::paginate();

        return view('parish-priest.index', compact('parishPriests'))
            ->with('i', (request()->input('page', 1) - 1) * $parishPriests->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parishPriest = new ParishPriest();
        return view('parish-priest.create', compact('parishPriest'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ParishPriest::$rules, ParishPriest::$message);

        $parishPriest = ParishPriest::create($request->all());

        return redirect()->route('parishpriests.index')
            ->with('success', 'Párroco creado exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parishPriest = ParishPriest::find($id);

        return view('parish-priest.edit', compact('parishPriest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ParishPriest $parishPriest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParishPriest $parishpriest)
    {
        request()->validate(array_slice(ParishPriest::$rules, 1), ParishPriest::$message);
        request()->validate(['Rut' => ['required','string','max:20','regex:/^([1-9]|[1-9][0-9]).([0-9]){3}.([0-9]){3}-([K]|[0-9])/']], ParishPriest::$message);

        $parishpriest->update($request->all());

        return redirect()->route('parishpriests.index')
            ->with('success', 'Párroco editado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $parishPriest = ParishPriest::find($id)->delete();

        return redirect()->route('parishpriests.index')
            ->with('success', 'Párroco eliminado exitosamente.');
    }
}
