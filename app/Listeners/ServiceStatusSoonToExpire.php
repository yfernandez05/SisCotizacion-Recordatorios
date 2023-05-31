<?php

namespace App\Listeners;

use App\Events\ServiceNotificationSoonToExpire;
use App\Mail\ServiceSoonToExpire;
use App\Models\DetalleServicio;
use App\Models\Servicio;
use App\Util\LogErrorManager;
use App\Util\ResultManager;
use App\Util\RuleManager;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\QueryException;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ServiceStatusSoonToExpire
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
    public function handle(ServiceNotificationSoonToExpire $event)
    {
        $servicio = $event->servicio;
        //dump($servicio->codservicio);

        try {       
            DB::transaction(function () use ($servicio) {
                /* foreach ($servicio as $service) {  
                    
                    //Servicio::whereIn('codservicio', $service->pluck('codservicio'))->update(['codestadoservicio' => RuleManager::STATUS_SERVICES['PRONTO_VENCER']]);
                    $service->update(['codestadoservicio' => RuleManager::STATUS_SERVICES['PRONTO_VENCER']]);
                    DetalleServicio::whereIn('id', $service->serviciodetalles->pluck('id'))->update(['codestadoservicio' => RuleManager::STATUS_DETAILS_SERVICES['PRONTO_VENCER']]);
                    //Mail::to($service->cliente->email)->send(new ServiceSoonToExpire($service));
                    dump('por vencer --');
                } */ 
                Servicio::where('codservicio', $servicio->codservicio)->update(['codestadoservicio' => RuleManager::STATUS_SERVICES['PRONTO_VENCER']]);
                DetalleServicio::whereIn('id', $servicio->serviciodetalles->pluck('id'))->update(['codestadoservicio' => RuleManager::STATUS_DETAILS_SERVICES['PRONTO_VENCER']]);
                Mail::to($servicio->cliente->email)->send(new ServiceSoonToExpire($servicio));
                    
            });          
        } catch (QueryException $e) {
            dump($e->getMessage());
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
        } catch (Exception $e) {
            dump($e->getMessage());
            LogErrorManager::saveInDB($this, __FUNCTION__, $e);
        }
          
    }

    public function catch(Exception $exception)
    {
        
    }
}
