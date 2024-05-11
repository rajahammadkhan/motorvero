<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DealerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_dealer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact_dealer)
    {
        $this->contact_dealer = $contact_dealer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from motorvero.com')->view('frontend.email.index');
    }
}
