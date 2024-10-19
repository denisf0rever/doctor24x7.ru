<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class BookingAdded extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

	public function build()
    {
        return $this->view('emails.BookingAdded');
    }
	
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
			from: new Address('notify@doctor24x7.ru', 'Доктор 24x7'),
			//replyTo: [new Address('hello@okuoku.ru', 'OkuOku')],
			subject: 'Врач готовит ответ для вас',
		);
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.BookingAdded',
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