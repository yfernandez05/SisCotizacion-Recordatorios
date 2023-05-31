<?php

namespace App\Listeners;

use App\Events\ServiceNotificationExpired;
use App\Mail\ServiceExpire;
use App\Models\DetalleServicio;
use App\Models\Servicio;
use App\Util\LogErrorManager;
use App\Util\RuleManager;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\QueryException;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ServiceStatusExpiredChange
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ServiceNotificationExpired $event)
    {
        $servicio = $event->servicio;
        try {       
            DB::transaction(function () use ($servicio) {
                Servicio::where('codservicio', $servicio->codservicio)->update(['codestadoservicio' => RuleManager::STATUS_SERVICES['VENCIDO']]);
                DetalleServicio::whereIn('id', $servicio->serviciodetalles->pluck('id'))->update(['codestadoservicio' => RuleManager::STATUS_DETAILS_SERVICES['VENCIDO']]);
                Mail::to($servicio->cliente->email)->send(new ServiceExpire($servicio));
            });          
        } catch (QueryException $e) {
            dump($e->getMessage());
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
        } catch (Exception $e) {
            dump($e->getMessage());
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
        }
    }
}
