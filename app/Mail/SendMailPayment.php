<?php

namespace App\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailPayment extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
      $this->data = $data;  
    }

    public function build()
    {
        return $this->from(config('mail.from.address'))->subject('Atualização da compra do produto')->view('suport.payment')->with('data', $this->data);
    }
}
