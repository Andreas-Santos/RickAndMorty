<?php

namespace App\Http\Controllers;

class CharacterController extends Controller
{
    public function character($id)
    {
        $url = 'https://rickandmortyapi.com/api/character/' . $id;

        $json = file_get_contents($url);

        $character = json_decode($json, true);

        if ($character !== null) {
            return view('character-details', ['character' => $character]);
        } else {
            abort(404);
        }
    }
}
