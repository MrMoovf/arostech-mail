<?php

namespace Arostech\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageOwner extends Mailable
{
    use Queueable, SerializesModels;

    public $email = '';
    public $msg = '';
    public $name = '';
    public $app_url = env('APP_URL');
    public $app_name = env('APP_NAME');
    public $app_owner_name = env('APP_OWNER_NAME');

    /**
     * Create a new message instance.
     */
    public function __construct($email, $name, $msg)
    {
        $this->email = $email;
        $this->name = $name;
        $this->msg = $msg;
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noreply@arostech.dk','Anders from Aros Tech'),
            subject: 'You have a new message |  Aros Tech CMS',
            replyTo: [
                new Address('anders@arostech.dk','Anders Kozuch')
            ],
            
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'arostech::message.owner',
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
