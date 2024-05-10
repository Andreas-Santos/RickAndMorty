<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $dados = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(Auth::attempt($dados)) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Login realizado com sucesso!');
        }
        else{
            return back()->with('error', 'Usuário ou senha inválidos!');
        }
    }

    public function logout() {
        Auth::logout();

        return redirect('/login')->with('success', 'Você foi desconectado com sucesso!');
    }
}
