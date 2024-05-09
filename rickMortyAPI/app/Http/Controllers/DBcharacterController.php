<?php

namespace App\Http\Controllers;

use App\Models\Character;

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
}
