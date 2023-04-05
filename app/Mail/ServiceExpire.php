<?php

namespace App\Mail;

use App\Models\Servicio;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ServiceExpire extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = 'Tiene servicios que ya Vencieron!!';
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
        return $this->view('emails.messageServiceExpire');
    }
}
