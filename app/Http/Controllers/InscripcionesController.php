<?php

namespace App\Http\Controllers;

use App\Models\Busquedas;
use App\Models\Inscripciones;
use Illuminate\Http\Request;

class InscripcionesController extends Controller
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
        $inscripcion = new Inscripciones();

        $inscripcion->busquedas_id = $request->busquedas_id;
        $inscripcion->nombre = $request->nombre;
        $inscripcion->apellido = $request->apellido;

        $inscripcion->save();

        return redirect('/busquedas/'.$request->rubro_nombre)->with('status', 'La inscripción se realizó exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscripciones  $inscripciones
     * @return \Illuminate\Http\Response
     */
    public function show(Inscripciones $inscripciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscripciones  $inscripciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscripciones $inscripciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inscripciones  $inscripciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscripciones $inscripciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inscripciones  $inscripciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscripciones $inscripciones)
    {
        //
    }
}
