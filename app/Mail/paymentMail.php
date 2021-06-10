<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class paymentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $detail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detail)
    {
        //
        $this->detail = $detail;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $imagePaypal = env('APP_URL')."https://i.postimg.cc/HnzHpSSk/visa.png";
        $imageMasterCard = env('APP_URL')."https://i.postimg.cc/SxT6XkXW/mastercard.png";
        $imagePaypal2 = env('APP_URL')."https://i.postimg.cc/qMpyjzys/paypal2.png";

        return $this->markdown('pages.cart.formEmail')
            ->with('details', $this->detail)
            ->with(['imagePaypal'=>$imagePaypal,'imageMasterCard'=>$imageMasterCard,'imagePaypal2'=>$imagePaypal2]);
    }
}
