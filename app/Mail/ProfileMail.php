<?php

namespace App\Mail;

use App\Models\Profile;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProfileMail extends Mailable
{
    use Queueable, SerializesModels;
    public function __construct(private readonly Profile $profile)
    {
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Profile confirmation',
        );
    }
    public function content(): Content
    {
      return new Content(
            view: 'emails.inscription',
            with: [
              'email' => $this->profile->email,
              'name' =>$this->profile->name,
            ]
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
