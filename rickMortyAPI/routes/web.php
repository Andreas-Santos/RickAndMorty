<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/register', function () {
    return view('register');
});

Route::get('/characters/{id}', function ($id) {
    $url = 'https://rickandmortyapi.com/api/character/' . $id;

    $json = file_get_contents($url);

    $character = json_decode($json, true);

    if ($character !== null) {
        return view('character-details', ['character' => $character]);
    } else {
        abort(404);
    }
});