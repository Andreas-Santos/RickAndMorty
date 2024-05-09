<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        $emailLogin = request('emailLogin');
        $senhaLogin = request('senhaLogin');

        $usuarioCadastrado = User::where('email', $emailLogin)->first();

        if(!$usuarioCadastrado) {
            return back()->with('error', 'Não existe cadastro para este e-mail!'); // inserir mensagem de erro para o usuário
        }

        $senhaUsuario = $usuarioCadastrado['senha'];
        $senhaLogin = md5($senhaLogin);

        if($senhaLogin !== $senhaUsuario) {
            return back()->with('error', 'Senha inválida!'); // inserir mensagem de erro para o usuário
        }

        return redirect('/')->with('success', 'Login realizado com sucesso!'); // inserir mensagem de sucesso para o usuário
    }
}
