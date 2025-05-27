<?php

use Illuminate\Support\Facades\Route;

Route::get('/formppan', function () {
    return view('formPPAN_PPAP');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/formpp', function () {
    return view('formPp');
});

Route::get('/register', function () {
    return view('auth/register');
})->name('register');

Route::get('/login', function () {
    return view('auth/login');
})->name('login');
Route::get('/pendaftaran', function () {
    return view('formPp');
})->name('pendaftaran');

Route::get('/kategori', function () {
    return view('kategori');
})->name('kategori');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');

Route::get('/editor', function () {
    return view('admin/editor');
})->name('editor');

Route::get('/blog', function () {
    return view('admin/blog');
})->name('blog');
