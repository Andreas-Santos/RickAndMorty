<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register()
    {
        $nome = request('nome');
        $email = request('email');
        $senha = request('senha');
        $confSenha = request('confSenha');
        
        // Verifica se o e-mail já possui cadastro
        $usuarioCadastrado = User::where('email', $email)->first();
        if($usuarioCadastrado) {
            return back()->with('error', 'Já existe um usuário com este e-mail!');
        }

        if ($senha !== $confSenha) {
            return back()->with('error', 'As senhas não coincidem!');
        }

        // Insere o usuário no banco
        User::create([
            'name' => $nome,
            'email' => $email,
            'email_verified_at' => now(),
            'password' => Hash::make($senha),
            'remember_token' => Str::random(10)
        ]);

        return redirect('/login')->with('success', 'Cadastro realizado com sucesso!'); 
    }
}
