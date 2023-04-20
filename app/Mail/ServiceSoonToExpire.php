<?php

namespace App\Mail;

use App\Models\DetalleServicio;
use App\Models\Servicio;
use App\Models\TipoServicio;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ServiceSoonToExpire extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = 'Tienes servicios que estan proximos a vencer!!';
    public $servicio;
    public $tiposervicio;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Servicio $servicio)
    {
        $this->servicio = $servicio;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.messageServiceSoonToExpire');
    }
}
