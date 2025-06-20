<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/formaspirasi', function () {
    return view('form_aspirasi');
});
