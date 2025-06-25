<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SilapirController;
use App\Http\Controllers\AuthController;

Route::get('/laporan', [SilapirController::class, 'showLaporanForm'])->name('laporan.form');
Route::post('/laporan', [SilapirController::class, 'storeLaporan'])->name('laporan.store');


Route::get('/aspirasi', [SilapirController::class, 'showAspirasiForm'])->name('aspirasi.form');
Route::post('/aspirasi', [SilapirController::class, 'storeAspirasi'])->name('aspirasi.store');


Route::get('/', function () {
    return view('beranda');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/dashboard', function () {
    return view('dashboard');
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
