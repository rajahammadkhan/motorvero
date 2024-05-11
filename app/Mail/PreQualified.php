<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PreQualified extends Mailable
{
    use Queueable, SerializesModels;

    public $qualified;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($qualified)
    {
        $this->qualified = $qualified;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from motorvero.com')->view('frontend.email.prequalified');
    }
}
