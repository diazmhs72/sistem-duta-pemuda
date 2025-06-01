<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VerifikatorController;
use App\Http\Controllers\JuriController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/formppan', function () {
    return view('formPPAN_PPAP');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/formpp', function () {
    return view('formPp');
});

Route::get('/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/pendaftaranPp', function () {
    return view('formPp');
})->name('pendaftaranPp');

Route::get('/pendaftaranPpap', function () {
    return view('formPPAN_PPAP');
})->name('pendaftaranPpap');

Route::get('/pendaftaranPpan', function () {
    return view('formPPAN_PPAP');
})->name('pendaftaranPpan');

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

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/provinsi', [LocationController::class, 'getProvinsi']);
Route::get('/kota/{kodeProvinsi}', [LocationController::class, 'getKota']);
Route::get('/kecamatan/{kodeKota}', [LocationController::class, 'getKecamatan']);
Route::get('/desa/{kodeKecamatan}', [LocationController::class, 'getDesa']);
