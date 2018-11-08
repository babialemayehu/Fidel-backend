<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Password extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $password; 

    public function __construct($passwd)
    {
        $this->password=$passwd; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->from('password@fidel.dmu.edu.et')
               // ->text($this->password);
               ->subject('Welcome to fidel')
                ->view('mail.firstPassword')
                ->with('password', $this->password);
    }
}
