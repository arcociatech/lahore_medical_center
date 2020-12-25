<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $first_name;
    public $last_name;
    public $number;
    public $message;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($first_name,$last_name,$number,$message,$email)
    {
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->number=$number;
        $this->message=$message;
        $this->email=$email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->markdown('emails.sendmail')->with([
            'number' => $this->number,
            'first_name'=>$this->first_name,
            'last_name' => $this->last_name,
            'message' => $this->message,
        ]);
    }
}
