<?php

namespace App\Http\Controllers;

use App\Models\Baptism;
use Illuminate\Http\Request;

/**
 * Class BaptismController
 * @package App\Http\Controllers
 */
class BaptismController extends Controller
{
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
        request()->validate(Baptism::$rules);

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
        request()->validate(Baptism::$rules);

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
}
