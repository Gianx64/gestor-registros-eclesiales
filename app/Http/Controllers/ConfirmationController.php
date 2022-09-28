<?php

namespace App\Http\Controllers;

use App\Models\Confirmation;
use Illuminate\Http\Request;

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
}
