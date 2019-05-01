<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class contact extends Mailable
{
    use Queueable, SerializesModels;
    public $sujet;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$sujet)
    {
        $this->sujet =$sujet ;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('pro.lagg99@gmail.com')
                    ->view('contact-us');
    }
}
