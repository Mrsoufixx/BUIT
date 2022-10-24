<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class MailGoogle extends Mailable
{
    use Queueable, SerializesModels;

    public $url= "www.google.com";

    public $data ;


    /**
     * Create a new message instance.
     *
     * @return void
     */

    // public function __construct(array $data)
    // {
    //     //
    //     $this->data=$data;
    // }
    public function __construct($data)
    {
        $this->data = $data;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->data['subject'])
                    ->markdown('emails.mail');
    }
}
