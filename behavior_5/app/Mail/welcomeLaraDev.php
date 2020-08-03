<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class welcomeLaraDev extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $user;
    private $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\stdClass $user,\stdClass $order)
    {
        $this->user = $user;
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.welcomeLaraDev')
            ->subject('Inscrição Curso')
            ->to($this->user->email,$this->user->name)
            ->with([
                'user' => $this->user,
                'order' => $this->order
            ]);
    }
}
