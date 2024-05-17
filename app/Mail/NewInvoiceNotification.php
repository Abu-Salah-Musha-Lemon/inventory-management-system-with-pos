<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewInvoiceNotification extends Mailable
{
    

    use Queueable, SerializesModels;

    public $customerName;
    public $totalAmount;

    public function __construct($customerName, $totalAmount)
    {
        $this->customerName = $customerName;
        $this->totalAmount = $totalAmount;
    }

    public function build()
    {
        return $this->markdown('emails.new_invoice_notification');
    }
}
