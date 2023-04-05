<?php

namespace App\Http\Controllers;

use App\Models\TipoEstadoServicio;
use Illuminate\Http\Request;

class TipoEstadoServicioController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $this->getFilters($request, new TipoEstadoServicio());
        $perpage = $this->getLimitPagination($request);

        $tipoEstadoServicio = TipoEstadoServicio::where($filters)
            ->orderBy('codtipoestadoservicio', 'DESC')
            ->paginate($perpage);
            
        return $tipoEstadoServicio;
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
     * @param  \App\Models\TipoEstadoServicio  $tipoEstadoServicio
     * @return \Illuminate\Http\Response
     */
    public function show(TipoEstadoServicio $tipoEstadoServicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoEstadoServicio  $tipoEstadoServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoEstadoServicio $tipoEstadoServicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoEstadoServicio  $tipoEstadoServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoEstadoServicio $tipoEstadoServicio)
    {
        //
    }

}
