<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserPasswordMail;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Gerar uma senha aleatória
        $randomPassword = Str::random(10); // Senha aleatória com 10 caracteres

        // Criar o usuário
        $user = User::create([
            'name' => 'Nzongo Pedro',
            'email' => 'nzongopedro3@gmail.com',
            'password' => Hash::make($randomPassword), // Criptografar a senha
        ]);

        // Enviar o e-mail com a senha gerada
        $url = app()->environment('local') ? env('APP_URL_LOCAL') : env('APP_URL_PRODUCTION');
        Mail::to($user->email)->send(new UserPasswordMail($user, $randomPassword, $url));


    }
}
