<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Help extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $sender;
    public $content;
    public $name;

    public function __construct($sender, $content, $name)
    {
        //
        $this->name = $name;
        $this->sender = $sender;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@kynesia.id')
                    ->subject('Kynesia Question')
                    ->view('mail.help')
                    ->with(['sender' => $this->sender,
                            'content' => $this->content,
                            'name' => $this->name,]);
    }
}
