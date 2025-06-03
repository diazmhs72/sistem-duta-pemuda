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



Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/pendaftaranPp', function () {
    return view('auth/formPp');
})->name('pendaftaranPp');

Route::get('/pendaftaranPpap', function () {
    return view('auth/formPPAN_PPAP');
})->name('pendaftaranPpap');

Route::get('/pendaftaranPpan', function () {
    return view('auth/formPPAN_PPAP');
})->name('pendaftaranPpan');

Route::get('/kategori', function () {
    return view('kategori');
})->name('kategori');

Route::get('/admin', function () {
    return view('admin/adminCustom');
})->name('admin');

Route::get('/pp', function () {
    return view('admin/pendaftar/pp');
})->name('pp');

Route::get('/editor', function () {
    return view('admin/editor');
})->name('editor');

Route::get('/blog', function () {
    return view('admin/blog');
})->name('blog');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/profile', function () {
    return view('pendaftar/profile');
})->name('profile');

Route::get('/ubahPassword', function () {
    return view('pendaftar/ubahPassword');
})->name('ubahPassword');



Route::get('/provinsi', [LocationController::class, 'getProvinsi']);
Route::get('/kota/{kodeProvinsi}', [LocationController::class, 'getKota']);
Route::get('/kecamatan/{kodeKota}', [LocationController::class, 'getKecamatan']);
Route::get('/desa/{kodeKecamatan}', [LocationController::class, 'getDesa']);
