<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;
    public $email;
    public $mobileNumber;
    public $organization;
    public $reasonForContacting;

    /**
     * Create a new message instance.
     */
    public function __construct($info)
    {
        $this->fullname = $info->fullname;
        $this->email = $info->email;
        $this->mobileNumber = $info->mobileNumber;
        $this->organization = $info->organization;
        $this->reasonForContacting = $info->reasonForContacting;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@ruralnet.ph', 'Admin')
                    ->subject('INQUIRY')
                    ->view('website.email.contact');
    }


    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'website.email.contact',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
