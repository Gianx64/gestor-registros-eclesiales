<?php

namespace App\Http\Controllers;

use App\Models\Chapel;
use Illuminate\Http\Request;

/**
 * Class ChapelController
 * @package App\Http\Controllers
 */
class ChapelController extends Controller
{
	public function __construct() {
		$this->middleware('can:chapels.index')->only('index', 'show');
		$this->middleware('can:chapels.edit')->only('edit', 'update');
		$this->middleware('can:chapels.create')->only('create', 'store');
		$this->middleware('can:chapels.destroy')->only('destroy');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapels = Chapel::paginate();

        return view('chapel.index', compact('chapels'))
            ->with('i', (request()->input('page', 1) - 1) * $chapels->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chapel = new Chapel();
        return view('chapel.create', compact('chapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Chapel::$rules);

        $chapel = Chapel::create($request->all());

        return redirect()->route('chapels.index')
            ->with('success', 'Capilla creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chapel = Chapel::find($id);

        return view('chapel.show', compact('chapel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chapel = Chapel::find($id);

        return view('chapel.edit', compact('chapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Chapel $chapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapel $chapel)
    {
        request()->validate(Chapel::$rules);

        $chapel->update($request->all());

        return redirect()->route('chapels.index')
            ->with('success', 'Capilla editada exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $chapel = Chapel::find($id)->delete();

        return redirect()->route('chapels.index')
            ->with('success', 'Capilla eliminada exitosamente.');
    }
}
