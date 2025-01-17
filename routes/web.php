<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\KegiatanController;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', [ProfilController::class, 'showShortenedSejarah']);

Route::get('/detailSejarah', [SejarahController::class, 'showDetailSejarah']);

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
})->name('kegiatan.index');

// Route untuk detail kegiatan
Route::get('/detailKegiatan/{id}', [KegiatanController::class, 'showDetailKegiatan'])->name('detailKegiatan');


Route::get('/download', function () {
    return view('download');
});

Route::get('/ppid', function () {
    return view('ppid');
});
