<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        $nome = request('nome');
        $sobrenome = request('sobrenome');
        $email = request('email');
        $senha = request('senha');
        $confSenha = request('confSenha');

        if ($senha !== $confSenha) {
            return back();;
        }

        User::create([
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
            'senha' => bcrypt($senha)
        ]);

        return redirect('/login');
    }
}
