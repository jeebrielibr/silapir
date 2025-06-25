<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/dasboard', function () {
    return view('dasboard');
});
Route::get('/tentangkami', function () {
    return view('tentangkami');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/formLaporan', function () {
    return view('formLaporan');
});
Route::get('/formAspirasi', function () {
    return view('formAspirasi');
});
Route::get('/coba', function () {
    return view('coba');
});
Route::get('/coba1', function () {
    return view('coba1');
});




Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
