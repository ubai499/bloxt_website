<?php

namespace App\Mail;

use App\Models\Product;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewItemMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public Product $product;
    public Subscriber $subscriber;

    public function __construct(Product $product, Subscriber $subscriber)
    {
        $this->product = $product;
        $this->subscriber = $subscriber;
    }

    public function build()
    {
        return $this->subject('New item: ' . ($this->product->title ?? 'Update'))
            ->view('emails.new_item');
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
