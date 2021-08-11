<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\FormQuery;

use Illuminate\Support\Facades\Log;

class QueryMade extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $query;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(FormQuery $formquery)
    {
        $this->firstname = $formquery->firstname;
        $this->lastname = $formquery->lastname;
        $this->email = $formquery->email;
        $this->phone = $formquery->phone;
        $this->query = $formquery->query;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.query_made')->subject('Nueva Consulta - Marian');
    }
}
