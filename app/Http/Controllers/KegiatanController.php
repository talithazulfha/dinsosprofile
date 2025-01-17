<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function showDetailKegiatan($id)
    {
        // Data statis untuk testing
        $kegiatan = (object)[
            'judul' => 'Jambore Nasional Pramuka Anak',
            'tanggal' => '03 Januari 2024',
            'author' => 'Dinsos',
            'views' => '90 kali dibaca',
            'gambar' => 'images/jambore.jpg',
            'tanggal_mulai' => 'Sabtu, 22 Juli 2023',
            'tanggal_selesai' => 'Selasa, 25 Juli 2023',
            'lokasi' => 'Bukittinggi',
            'deskripsi' => 'Dinas Sosial Provinsi Sumatera Barat, Akan melaksanakan Event Nasional yaitu Jambore Nasional Pramuka Anak Di Bukittinggi yang akan dilaksanakan pada tanggal 22 - 25 Juli 2023.'
        ];

        return view('detailKegiatan', compact('kegiatan'));
    }
}
