<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Member;

class RegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $member;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('ADP E-VOTING SYSTEM REGISTRATION / ACCREDITATION')
                    ->view('home');
                   


    }               
}
