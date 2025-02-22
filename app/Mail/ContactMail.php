<?php


namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;

class ContactMail extends Mailable
{
    public $request;

    // Pass the request to the mailable
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    // Build the email
    public function build()
    {
        return $this->subject('Message from Client Received!')
                    ->view('emails.contact');
    }
}

