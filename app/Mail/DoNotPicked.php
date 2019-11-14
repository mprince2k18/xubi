<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DoNotPicked extends Mailable
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
                  ->subject('You missed our call.Please contact with us ASAP!')
                  ->view('dashboard.trainee_registration.mail.do_not_picked',compact('name'));
    }
}
