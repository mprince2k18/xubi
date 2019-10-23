<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


    public $name ="";
    public function __construct($name)
    {
      $this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name ="";
        return $this->from('mprince2k16@gmail.com','Moohammad Prince')
                    ->subject('Congratulations, Your registration has been successfully processed. We contact with you within a short time.')
                    ->view('dashboard.trainee_registration.mail.index',compact('name'));
    }
}
