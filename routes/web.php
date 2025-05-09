<?php

use Illuminate\Support\Facades\Route;

Route::get('/formppan', function () {
    return view('formPPAN_PPAP');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/formpp', function () {
    return view('formPp');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/login', function () {
    return view('auth/login');
});
