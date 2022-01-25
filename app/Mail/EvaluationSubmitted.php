<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EvaluationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data["name"];
        $this->email = $data["email"];
        $this->mobile = $data["mobile"];
        $this->meta = $data["meta"];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Evaluation Online '.$this->name)->replyTo('americancenterofenglish@gmail.com')->view
        ('evaluationMail')->with([
                                                       'name' => $this->name,
                                                       'email' => $this->email,
                                                       'mobile' => $this->mobile,
                                                       'meta' => $this->meta,
                                                   ]);
    }
}
