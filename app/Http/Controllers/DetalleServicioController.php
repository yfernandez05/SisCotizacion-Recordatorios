<?php

namespace App\Http\Controllers;

use App\Models\DetalleServicio;
use App\Util\RuleManager;
use Illuminate\Http\Request;

class DetalleServicioController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return DetalleServicio::with('tiposervicio')->get();
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
     * @param  \App\Models\DetalleServicio  $detalleServicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleServicio = DetalleServicio::where(['codservicio' => $id, 'estado' => RuleManager::ACTIVE_STATE])
        ->with('tiposervicio','estadoservicio')
        ->get();

        return $detalleServicio;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetalleServicio  $detalleServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleServicio $detalleServicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalleServicio  $detalleServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleServicio $detalleServicio)
    {
        //
    }
}
