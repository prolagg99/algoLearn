<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class contact extends Mailable
{
    use Queueable, SerializesModels;
    public $mail_content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail_content)
    {
        $this->mail_content =$mail_content ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('pro.lagg99@gmail.com')
                    ->subject('ALGOlearn message')
                    ->view('emails.contact-message')
                    ->with('mail_content',$this->mail_content);
    }
}
