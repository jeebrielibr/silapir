<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SilapirController;

Route::get('/laporan', [SilapirController::class, 'showLaporanForm'])->name('laporan.form');
Route::post('/laporan', [SilapirController::class, 'storeLaporan'])->name('laporan.store');


Route::get('/aspirasi', [SilapirController::class, 'showAspirasiForm'])->name('aspirasi.form');
Route::post('/aspirasi', [SilapirController::class, 'storeAspirasi'])->name('aspirasi.store');


Route::get('/', function () {
    return view('landing page');
});
Route::get('/beranda', function () {
    return view('landing page');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\SilapirController::class, 'index'])->name('dashboard');
});
Route::get('/formLaporan', function () {
    return view('formLaporan');
});
Route::get('/formAspirasi', function () {
    return view('formAspirasi');
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

Route::delete('/aspirasi/{id}', [\App\Http\Controllers\SilapirController::class, 'destroyAspirasi'])->name('aspirasi.destroy');
Route::delete('/laporan/{id}', [\App\Http\Controllers\SilapirController::class, 'destroyLaporan'])->name('laporan.destroy');
