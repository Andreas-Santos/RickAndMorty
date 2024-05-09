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

        $usuarioCadastrado = User::where('email', $email)->first();
        
        // Se o email for encontrado no banco
        if($usuarioCadastrado) {
            return back()->with('error', 'Já existe um usuário com este e-mail!'); //inserir mensagem de erro para o usuário
        }

        if ($senha !== $confSenha) {
            return back()->with('error', 'As senhas não coincidem!'); //inserir mensagem de erro para o usuário
        }

        User::create([
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
            'senha' => md5($senha)
        ]);

        return redirect('/login')->with('success', 'Cadastro realizado com sucesso!'); //inserir mensagem de sucesso para o usuário
    }
}
