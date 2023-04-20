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
                $servicio->update(['codestadoservicio' => RuleManager::STATUS_SERVICES['PRONTO_VENCER']]);
                DetalleServicio::whereIn('id', $servicio->serviciodetalles->pluck('id'))->update(['codestadoservicio' => RuleManager::STATUS_DETAILS_SERVICES['PRONTO_VENCER']]);
                Mail::to($servicio->cliente->email)->send(new ServiceSoonToExpire($servicio));
                    
            });          
        } catch (QueryException $e) {
            dump($e->getMessage());
            //LogErrorManager::saveInDB($this, __FUNCTION__, $e);
        } catch (Exception $e) {
            dump($e->getMessage());
            //LogErrorManager::saveInDB($this, __FUNCTION__, $e);
        }

        /* foreach ($servicio as $service) {            


            //dump('Servicio por expirar: ',$service->codservicio);
        
            dump($service->serviciodetalles->pluck('id')->unique());
             //dump('CODSERVICIO id:',$service->serviciodetalles->pluck('id')->unique());
             //dump('COdDETALLE id:',$service->serviciodetalles->first()->codtiposervicio);

            //update status servicio Genera
            $service->update(['codestadoservicio' => RuleManager::STATUS_SERVICES['PRONTO_VENCER']]);
            $service->serviciodetalles->update(['codestadodetalle' => RuleManager::STATUS_DETAILS_SERVICES['PRONTO_VENCER']]);


            //send notification Customers
            //Mail::to($service->cliente->email)->send(new ServiceSoonToExpire($service)); 
            
        } */
        //dump($service->serviciodetalles->first()->tiposervicio);
        /* $detail = $service->serviciodetalles->first()->tiposervicio; */
        //pasarle otro valor al correo de detalle de ventas sacado desde ventas porque no se puede acceder o buscar toramanera de acceder a tipodeservicio end etalleventas
          //Mail::to($service->cliente->email)->send(new ServiceSoonToExpire($service)); 
          
    }

    public function catch(Exception $exception)
    {
        
    }
}
