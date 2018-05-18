<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use App\PostRide;

class RideMessages extends Mailable
{
    use Queueable, SerializesModels;


    public $user;

    /**
         * Create a new message instance.
         *
         * @return void
         */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build( )
    {

        $address = 'info@shareinc.com';
        $name = 'Sharbel Chris';
        $subject = 'Ride Confirmation ';
        return $this->view('emails.messagesride')
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }
}
