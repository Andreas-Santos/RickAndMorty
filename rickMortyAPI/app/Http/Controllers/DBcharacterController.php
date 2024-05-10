<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DBcharacterController extends Controller
{
    public function characterdb($id)
    {
        // Pega o usuário autenticado
        $user = Auth::user();

        $character = Character::where('id', $id)->first();

        if ($character !== null) {
            return view('character-db', ['character' => $character], ['user' => $user]);
        } else {
            abort(404);
        }
    }

    public function delete($id)
    {   
        // Pega o usuário autenticado
        $user = Auth::user();
        
        if(!$user) {
            return redirect('/login')->with('error', 'É necessário estar logado para realizar esta ação!');
        }

        // Deleta o personagem pelo id
        Character::where('id', $id)->first()->delete();

        return redirect('/characters')->with('success', 'Personagem excluído com sucesso!');
    }

    public function edit($id)
    {   
        // Pega o usuário autenticado
        $user = Auth::user();

        if(!$user) {
            return redirect('/login')->with('error', 'É necessário estar logado para realizar esta ação!');
        }
        
        $character = Character::where('id', $id)->first();

        if ($character !== null) {
            return view('editCharacter', ['character' => $character], ['user' => $user]);
        } else {
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {   
        // Pega o usuário autenticado
        $user = Auth::user();
        
        if(!$user) {
            return redirect('/login')->with('error', 'É necessário estar logado para realizar esta ação!');
        }
        
        // Pega o personagem e realiza o update dos dados
        $character = Character::where('id', $id)->first();
        $character->update($request->all());

        return redirect('/character-db/' . $id)->with('success', 'Personagem atualizado com sucesso!');
    }
}
