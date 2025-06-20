<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SilapirController;

Route::get('/laporan', [SilapirController::class, 'showLaporanForm'])->name('laporan.form');
Route::post('/laporan', [SilapirController::class, 'storeLaporan'])->name('laporan.store');
Route::get('/formLaporan', function () {
    return view('formLaporan');
});

Route::get('/aspirasi', [SilapirController::class, 'showAspirasiForm'])->name('aspirasi.form');
Route::post('/aspirasi', [SilapirController::class, 'storeAspirasi'])->name('aspirasi.store');
Route::get('/formAspirasi', function () {
    return view('formAspirasi');
});

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
