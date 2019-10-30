<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WaitingMail extends Mailable
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

      return $this->from('mprince2k16@gmail.com','Mohammad Prince')
                  ->subject('Congratulations, Your are in waiting in this program. We will contact with you within a short time.')
                  ->view('dashboard.trainee_registration.mail.waiting',compact('name'));
    }
}
