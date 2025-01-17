<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpidController;
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

Route::get('/foto', function () {
    return view('foto');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/detailFoto', function () {
    return view('detailFoto');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
})->name('kegiatan.index');

// Route untuk detail kegiatan
Route::get('/detailKegiatan/{id}', [KegiatanController::class, 'showDetailKegiatan'])->name('detailKegiatan');


Route::get('/download', function () {
    return view('download');
});



Route::get('/profilPpid', [PpidController::class, 'profilPpid'])->name('ppid.profil');
Route::get('/informasiSertaMerta', [PpidController::class, 'informasiSertaMerta'])->name('ppid.serta-merta');
Route::get('/informasiTersediaSetiapSaat', [PpidController::class, 'informasiTersediaSetiapSaat'])->name('ppid.setiap-saat');
Route::get('/informasiBerkala', [PpidController::class, 'informasiBerkala'])->name('ppid.berkala');
Route::get('/informasiDikecualikan', [PpidController::class, 'informasiDikecualikan'])->name('ppid.dikecualikan');

