<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;

class UserPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $password;
    public $url;

    public function __construct($user, $password, $url)
    {
        $this->user = $user;
        $this->password = $password;
        $this->url = $url;
    }

    public function build()
    {
        return $this->subject('Majose E-commerce - Senha de Acesso')
            ->view('emails.userPassword')
            ->with([
                'user' => $this->user,
                'password' => $this->password,
                'url' => $this->url,
            ]);
    }
}
