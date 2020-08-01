<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class testmail extends Mailable
{
    use Queueable, SerializesModels;

    public $details = array();
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {

        $this->details['titel'] = $details['titel'];
        $this->details['signature'] = $details['signature'];
        $this->details['body'] = $details['body'];
        // $this->$details = implode(" ",$details);
        // print_r($details);
        // print_r($this->details);
        // $this->$details = implode(' ', array_values($details));


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail From Online Support')->markdown('emails.verifiedmail');
    }
}
