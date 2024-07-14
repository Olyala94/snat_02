<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'S Art Beuty Center Mail',
        );
    }

    public function content(): Content
    {
        return new Content(
           view: 'mail.send-email',
            with: ['contact' => $this->contact],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
