<?php

namespace App\Observers;

use App\Models\Servicio;
use App\Models\TipoComprobante;

class ServicioObserver
{
    /**
     * Handle the Servicio "created" event.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return void
     */
    public function creating(Servicio $servicio){

        // Obtener el último correlativo para el tipo de documento correspondiente
        $tipoComprobante = TipoComprobante::findOrFail($servicio->codcomprobante);
        $correlativo = $tipoComprobante->correlativo;

        // Actualizar el correlativo y guardar los cambios
        $tipoComprobante->correlativo++;
        $tipoComprobante->save();

        // Asignar el correlativo a la columna "numero" del servicio
        $servicio->numero = $correlativo;

        return true;
    }
    
    /* public function created(Servicio $servicio)
    {
        //
    } */

    /**
     * Handle the Servicio "updated" event.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return void
     */
    /* public function updated(Servicio $servicio)
    {
        //
    } */

    /**
     * Handle the Servicio "deleted" event.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return void
     */
    /* public function deleted(Servicio $servicio)
    {
        //
    } */

    /**
     * Handle the Servicio "restored" event.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return void
     */
    /* public function restored(Servicio $servicio)
    {
        //
    } */

    /**
     * Handle the Servicio "force deleted" event.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return void
     */
    /* public function forceDeleted(Servicio $servicio)
    {
        //
    } */
}
