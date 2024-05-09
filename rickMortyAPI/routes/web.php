<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\RegisterCharacterController;
use App\Http\Controllers\DBcharacterController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/characters', function () {
    return view('characters');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/characters/{id}', [CharacterController::class, 'character']);

Route::post('/characters/{id}', [RegisterCharacterController::class, 'register']);

Route::get('/character-db/{id}', [DBcharacterController::class, 'characterdb']);