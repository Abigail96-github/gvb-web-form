<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPin extends Mailable
{
    use Queueable, SerializesModels;
    public $email_required_details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_required_details)
    {
        $this->email_required_details =$email_required_details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Forgot Password')
            ->view('forgot_password.forgot_pin_template');
    }
}
