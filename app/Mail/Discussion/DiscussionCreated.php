<?php

namespace App\Mail\Discussion;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class DiscussionCreated extends Mailable
{
    use Queueable, SerializesModels;
	
    public function __construct(
		public string $discussionName
	) {
    }
	
	public function build()
    {
        return $this->view('emails.admin.DiscussionCreated');
    }
	
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
			from: new Address('notify@doctor24x7.ru', 'Доктор24x7'),
			//replyTo: [new Address('hello@okuoku.ru', 'OkuOku')],
			subject: 'Дискуссия создана',
		);
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.admin.DiscussionCreated',
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
