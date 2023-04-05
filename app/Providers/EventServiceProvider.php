<?php

namespace App\Providers;

use App\Events\ServiceNotificationExpired;
use App\Events\ServiceNotificationSoonToExpire;
use App\Listeners\ServiceStatusExpiredChange;
use App\Listeners\ServiceStatusSoonToExpire;
use App\Models\Servicio;
use App\Observers\ServicioObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        
        //Send mails and status services
        ServiceNotificationSoonToExpire::class =>[
            ServiceStatusSoonToExpire::class,
        ],
        ServiceNotificationExpired::class =>[
            ServiceStatusExpiredChange::class,
        ],

        
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Servicio::observe(ServicioObserver::class);
    }
}
