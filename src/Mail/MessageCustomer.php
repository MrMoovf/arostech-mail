<?php

namespace Arostech\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageCustomer extends Mailable
{
    use Queueable, SerializesModels;

    public $email = '';
    public $msg = '';
    public $name = '';
    public $app_url = '';

    /**
     * Create a new message instance.
     */
    public function __construct($email, $name, $msg)
    {
        $this->email = $email;
        $this->name = $name;
        $this->msg = $msg;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noreply@arostech.dk','Bjørn Guldager'),
            subject: 'Thank you for your interest | GR888.dk',
            replyTo: [
                new Address(env('MAIL_OWNERS_EMAIL'),'Bjørn Guldager')
            ],
            
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'arostech::message.customer',
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
