<?php

namespace App\Http\Controllers;

use App\Models\TasaInteres;
use Illuminate\Http\Request;

class TasaInteresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return dd('tasa interes');
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
     * @param  \App\Models\TasaInteres  $tasaInteres
     * @return \Illuminate\Http\Response
     */
    public function show(TasaInteres $tasaInteres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TasaInteres  $tasaInteres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TasaInteres $tasaInteres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TasaInteres  $tasaInteres
     * @return \Illuminate\Http\Response
     */
    public function destroy(TasaInteres $tasaInteres)
    {
        //
    }

    public function setModel(TasaInteres $tasainteres,Request $request): TasaInteres
    {
        $tasainteres->nombre = $request->nombre;
        $tasainteres->descripcion = $request->descripcion;
        return $tasainteres;

    }
}
