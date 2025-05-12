<?php

use Illuminate\Support\Facades\Route;

Route::get('/formppan', function () {
    return view('formPPAN_PPAP');
});

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/formpp', function () {
    return view('formPp');
});

Route::get('/register', function () {
    return view('auth/register');
})->name('register');

Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/pendaftaran', function () {
    return view('formPp');
})->name('pendaftaran');

Route::get('/kategori', function () {
    return view('kategori');
})->name('kategori');
