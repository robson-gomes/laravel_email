<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $nome;
    public $assunto;
    public $mensagem;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome, $assunto, $mensagem)
    {
        $this->nome = $nome;
        $this->assunto = $assunto;
        $this->mensagem = $mensagem;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.name')
                    ->subject($this->assunto)
                    ->from('laravel@teste.com');
    }
}
