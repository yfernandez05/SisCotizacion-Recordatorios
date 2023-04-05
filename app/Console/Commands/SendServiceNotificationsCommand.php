<?php

namespace App\Console\Commands;

use App\Events\ServiceNotification;
use App\Events\ServiceNotificationExpired;
use App\Events\ServiceNotificationPending;
use App\Events\ServiceNotificationSoonToExpire;
use App\Models\DetalleServicio;
use App\Models\Servicio;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendServiceNotificationsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'servicio:sendnotification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'command to verify service dates and send notification';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /* $fechaActual = Carbon::now()->toDateString();
        $fechaLimite = Carbon::parse($fechaActual)->addDays(5)->toDateString(); */
        $fechaActual = Carbon::now()->startOfDay()->toDateString();
        $fechaLimite = Carbon::now()->startOfDay()->subDays(5)->toDateString();

        //obtenemos las fechas que sean igual o ya pasaron de la fecha anticipo hasta que encuentre la fecha fin aqui no validamos la fecha anticipo, solo obtenemos los que son menores o estan igual a la fecha final
        //luego esos id lo validamos en la otra consulta para asi obtener solo los que estan por expirar.
        $serviciosfinal = Servicio::whereDate('fecha_finsercanogeneral', '<=', $fechaActual)->where('estado','A')->get();
        //$servicioanticipado = Servicio::whereDate('fecha_anticipadogeneral', '<=', $fechaActual)->get(); 

        //ingresamos los codservicios en una array si no jhay fechas igual af inales o menor no harba nada en el array
        $codigosServicioFinal = collect($serviciosfinal)->pluck('codservicio');
        //dd($codigosServicioFinal);

        //filtramos servicios que no tengan codigos que se repian en fecha final sercano - solo servicios con fecha anticipado sin estar en fecha finsercano.
        /* $arrayservicioanticipado = Servicio::whereDate('fecha_anticipadogeneral', '<=', $fechaActual)
        ->whereNotIn('codservicio', $codigosServicioFinal)
        ->get(); */
        $arrayservicioanticipado = Servicio::whereDate('fecha_anticipadogeneral', '<=', $fechaActual)
        ->where('estado', 'A')
        ->whereNotIn('codservicio', $codigosServicioFinal)
        ->with(['serviciodetalles' => function ($query) use ($fechaActual) {        
            $query->where('estado', '=', 'A')
            ->whereDate('fecha_anticipado', '<=', $fechaActual);
        }])
        ->get();


        //servicios donde fecha_finsercanogeneral es mayor o igual a la fecha de hoy, pero no mayor que la fecha de hoy.
        //asi obtenemos solo los expirados y venciados
        /* $serviciosExpiradosVencidoss = Servicio::whereDate('fecha_finsercanogeneral', '>=', $fechaActual)
        ->whereDate('fecha_finsercanogeneral', '<=', $fechaActual)
        ->with(['serviciodetalles' => function ($query) use ($fechaActual) {
            $query->where('estado', '=', 'A')
            ->whereDate('fecha_expiracion', '<=', $fechaActual);
        }])                                        
        ->get(); */

        //obtenemos los registros que sean meno o igual ala fecha limite  de hoy que es lafecha actual mas agregado N dias adicionales 
        //pero menor o igual a la fecha actual, luego filtramos los expirados en el detalle;
        $serviciosExpiradosVencidos = Servicio::whereDate('fecha_finsercanogeneral', '>=', $fechaLimite)
        ->whereDate('fecha_finsercanogeneral', '<=', $fechaActual)
        ->where('estado', 'A')
        ->with(['serviciodetalles' => function ($query) use ($fechaActual) {
            $query->where('estado', '=', 'A')
            ->whereDate('fecha_expiracion', '<=', $fechaActual);
        }]) 
        ->get();        

        //validar las consutlas por el estado del servicio, y elimianrlos.
        //al dar clic en un boton que diga renovar enviar el detalle del servicio en especifico renovado y la fecha que se esta estableciendo.
        //o en todo caso al mometno de guardar y ver qu hay una campo llamdo isRenoved entocnes enviar una notificacion al cliente con todo el detalle de lso servicios incluyendo sus estados.
        
        if ($arrayservicioanticipado->count() > 0) {
            foreach($arrayservicioanticipado as $data){
                //dump($data->serviciodetalles);
                dump('anticpiado: ',$data->codservicio);
            }

            //cambio de estado de servicio a pronto a expirar
            //event(new ServiceNotificationSoonToExpire($arrayservicioanticipado)); //usamos el evento ServiceNotificationSoonToExpire despue de enviar las notificaciones por correo para que cambie los estados  
        }


        /* return dd($serviciosExpiradosVencidoss); */
        if($serviciosExpiradosVencidos->count() > 0){  
            foreach ($serviciosExpiradosVencidos as $service) {
                dump('expirado: ',$service->codservicio);
            }
           //cambio de estado de servicio a servicios expirados
           //event(new ServiceNotificationExpired($serviciosExpiradosVencidos)); //usamos el evento ServiceNotificationExpired despue de enviar las notificaciones por correo para que cambie los estados
        }
    }
}
