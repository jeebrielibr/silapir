<?php

use Illuminate\Support\Facades\Route;

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
