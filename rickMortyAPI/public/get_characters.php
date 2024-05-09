<?php

use App\Models\Character;

$dados = Character::all();

$characters = json_encode($dados);

echo $characters;