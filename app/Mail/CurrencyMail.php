<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CurrencyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params)
    {
        $this->name = $params['name'];
        $this->currencyScale = $params['scale'];
        $this->currencyRate = $params['rate'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('nbrb@ultrabank.net')->to('dear@custom.er')->view('emails.currency')
            ->with([
            'name' => $this->name,
            'scale' => $this->currencyScale,
            'rate' => $this->currencyRate,
        ]);
    }
}
