<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\TestResult;

class TestResultMail extends Mailable
{
    use Queueable, SerializesModels;

    public $testresult;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(TestResult $testresult)
    {
        $this->testresult = $testresult;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.test')->subject('Resultados del test - Marian');
    }
}
