<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Service;

class OrderProcessed extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $lastname;
    public $service;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstname, $lastname, Service $service)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->service = $service;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.order_processed')->subject('Gracias por su compra - Marian');
    }
}
