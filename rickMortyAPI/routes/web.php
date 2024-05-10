<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DBcharacterController;
use App\Models\Character;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $user = Auth::user();

    return view('index', ['user' => $user]);
});

Route::get('/about', function () {
    $user = Auth::user();

    return view('about', ['user' => $user]);
});

Route::get('/characters', function () {
    $user = Auth::user();

    $characters = Character::all();

    return view('characters', ['user' => $user], ['characters' => $characters]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', [LoginController::class, 'logout']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/characters/{id}', [CharacterController::class, 'character']);

Route::post('/characters/{id}', [CharacterController::class, 'register']);

Route::get('/character-db/{personagem_id}', [DBcharacterController::class, 'characterdb']);

Route::delete('/character-db/{personagem_id}', [DBcharacterController::class, 'delete'])->name('character.delete');

Route::put('/character-db/{personagem_id}', [DBcharacterController::class, 'update'])->name('character.update');

Route::get('/character-db/{personagem_id}/edit', [DBcharacterController::class, 'edit'])->name('character.edit');
