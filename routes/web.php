<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
});

Route::get('/download', function () {
    return view('download');
});

Route::get('/ppid', function () {
    return view('ppid');
});
