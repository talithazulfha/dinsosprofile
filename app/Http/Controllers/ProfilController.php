<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class ProfilController extends Controller
{
    public function showShortenedSejarah()
    {
        // Ambil data sejarah dari model
        $sejarah = "
        Sejarah Singkat Dinas Sosial Provinsi Sumatera Barat Dinas Sosial Provinsi Sumatera Barat merupakan instansi pemerintah daerah yang secara organisatoris, teknik administrasi, dan teknik operasional berada di bawah Gubernur Provinsi Sumatera Barat. Dinas Sosial berdiri berdasarkan Peraturan Daerah Nomor 1 Tahun 2003 tentang perubahan organisasi dan tata dinas di lingkungan pemerintah daerah Provinsi Sumatera Barat. Sebelumnya, dalam Peraturan Daerah Nomor 5 Tahun 2001, Dinas Sosial bergabung dengan Dinas Kesehatan dengan nomenklatur Dinas Kesehatan dan Kesejahteraan Sosial, yang merupakan gabungan dari:
        ";

        $shortenedSejarah = Str::limit($sejarah, 300);
        
        return view('profil', compact('shortenedSejarah'));
    }

    
}
