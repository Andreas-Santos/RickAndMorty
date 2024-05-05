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

Route::get('/character', function () {
    return view('character-details');
});

Route::get('/register', function () {
    return view('register');
});