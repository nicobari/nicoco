<?php

namespace App\Http\Controllers;

use App\Models\Caja;
use Illuminate\Http\Request;

/**
 * Class CajaController
 * @package App\Http\Controllers
 */
class CajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cajas = Caja::paginate();

        return view('caja.index', compact('cajas'))
            ->with('i', (request()->input('page', 1) - 1) * $cajas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caja = new Caja();
        return view('caja.create', compact('caja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Caja::$rules);

        $caja = Caja::create($request->all());

        return redirect()->route('cajas.index')
            ->with('success', 'Caja created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caja = Caja::find($id);

        return view('caja.show', compact('caja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caja = Caja::find($id);

        return view('caja.edit', compact('caja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Caja $caja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caja $caja)
    {
        request()->validate(Caja::$rules);

        $caja->update($request->all());

        return redirect()->route('cajas.index')
            ->with('success', 'Caja updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caja = Caja::find($id)->delete();

        return redirect()->route('cajas.index')
            ->with('success', 'Caja deleted successfully');
    }
}
