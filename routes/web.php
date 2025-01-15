<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SejarahController;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', [ProfilController::class, 'showShortenedSejarah']);

Route::get('/detailSejarah', [SejarahController::class, 'showDetailSejarah']);

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/foto', function () {
    return view('foto');
});

Route::get('/detailFoto', function () {
    return view('detailFoto');
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

Route::get('/profilPpid', [PpidController::class, 'profilPpid'])->name('ppid.profil');
Route::get('/informasiSertaMerta', [PpidController::class, 'informasiSertaMerta'])->name('ppid.serta-merta');
Route::get('/informasiTersediaSetiapSaat', [PpidController::class, 'informasiTersediaSetiapSaat'])->name('ppid.setiap-saat');
Route::get('/informasiBerkala', [PpidController::class, 'informasiBerkala'])->name('ppid.berkala');
Route::get('/informasiDikecualikan', [PpidController::class, 'informasiDikecualikan'])->name('ppid.dikecualikan');