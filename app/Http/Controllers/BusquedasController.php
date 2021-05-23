<?php

namespace App\Http\Controllers;

use App\Models\Busquedas;
use App\Models\Rubros;
use Illuminate\Http\Request;

class BusquedasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Busquedas  $busquedas
     * @return \Illuminate\Http\Response
     */
    public function show(Rubros $rubros)
    {
        return view('busquedas', [
            'rubro' => $rubros->descripcion,
            'busquedas' => $rubros->busquedas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Busquedas  $busquedas
     * @return \Illuminate\Http\Response
     */
    public function edit(Busquedas $busquedas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Busquedas  $busquedas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Busquedas $busquedas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Busquedas  $busquedas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Busquedas $busquedas)
    {
        //
    }
}
