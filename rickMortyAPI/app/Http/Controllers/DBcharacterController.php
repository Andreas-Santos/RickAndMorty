<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class DBcharacterController extends Controller
{
    public function characterdb($id)
    {
        $character = Character::where('id', $id)->first();

        if ($character !== null) {
            return view('character-db', ['character' => $character]);
        } else {
            abort(404);
        }
    }

    public function delete($id)
    {
        Character::where('id', $id)->first()->delete();

        return redirect('/characters')->with('Success', 'Personagem excluído com sucesso!'); //inserir mensagem para o usuário
    }

    public function edit($id)
    {
        $character = Character::where('id', $id)->first();

        if ($character !== null) {
            return view('editCharacter', ['character' => $character]);
        } else {
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {
        $character = Character::findOrFail($id);
        $character->update($request->all());

        return redirect('/character-db/' . $id)->with('success', 'Personagem atualizado com sucesso!');
    }
}
