<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Contato;

class UserRegisteredEmail extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public static function build($arrayCadastro)
    {
        return (new UserRegisteredEmail)->subject("Cadastro Efetuado Com Sucesso")
                    ->view('mail')
                    ->with(["contato"=>$arrayCadastro]);
    }
}
