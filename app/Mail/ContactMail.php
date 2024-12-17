<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use SerializesModels;

    public $subject;
    public $date;
    public $details;

    public function __construct($data)
    {
        $this->subject = $data['subject'];
        $this->date = $data['date'];
        $this->details = $data['details'];
    }

    public function build()
    {
        return $this->subject($this->subject)
            ->view('emails.contact');
    }
}
