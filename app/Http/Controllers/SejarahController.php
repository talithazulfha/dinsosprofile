<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class SejarahController extends Controller
{
    public function showDetailSejarah()
    {
        // Ambil data sejarah dari model
        $sejarah = "
        <h2>Sejarah Singkat Dinas Sosial Provinsi Sumatera Barat</h2>
            <p>Dinas Sosial Provinsi Sumatera Barat merupakan instansi pemerintah daerah yang secara organisatoris, teknik administrasi, dan teknik operasional berada di bawah Gubernur Provinsi Sumatera Barat. Dinas Sosial berdiri berdasarkan Peraturan Daerah Nomor 1 Tahun 2003 tentang perubahan organisasi dan tata dinas di lingkungan pemerintah daerah Provinsi Sumatera Barat. Sebelumnya, dalam Peraturan Daerah Nomor 5 Tahun 2001, Dinas Sosial bergabung dengan Dinas Kesehatan dengan nomenklatur Dinas Kesehatan dan Kesejahteraan Sosial, yang merupakan gabungan dari:</p>
            <ul>
                <li>Kantor Wilayah Departemen Sosial</li>
                <li>Kantor Wilayah Departemen Kesehatan</li>
                <li>Dinas Kesehatan Provinsi Sumatera Barat</li>
            </ul>
            <p>Penggabungan ini merupakan konsekuensi dari diberlakukannya UU Nomor 22 Tahun 1999 tentang Otonomi Daerah dan Perda No. 5 Tahun 2001 tentang susunan organisasi dan tata kerja dinas (SOTK) di lingkungan Pemerintah Daerah Provinsi Sumatera Barat. Setelah berjalan lebih dari dua tahun, pemerintah mengevaluasi SOTK dengan mempertimbangkan efektivitas kinerja dan saran-saran dari masyarakat. Perubahan SOTK tersebut diusulkan oleh Gubernur dan disetujui oleh DPRD, sehingga Perda tersebut mulai efektif diberlakukan.</p>
            <p>Dalam perkembangannya, Dinas Sosial Provinsi Sumatera Barat telah melalui beberapa era, yang masing-masing memiliki nilai dan karakteristik tertentu sesuai kurun waktunya:</p>
            <ol>
                <li><b>Era Jawatan Sosial:</b> Sejak 17 Agustus 1945, secara yuridis telah berdiri Negara Republik Indonesia. Pemerintah membentuk kabinet, termasuk Departemen Sosial, untuk menangani masalah sosial secara serius. Di tingkat provinsi, dibentuk unit organisasi sosial dengan nama Jawatan Sosial Provinsi. Di tingkat keresidenan, unit organisasi sosial diberi nama Pejabat Sosial Negara RI Keresidenan.</li>
                <li><b>Era Inspeksi Sosial:</b> Pada tahun 1950, susunan organisasi dan tata kerja Jawatan Sosial diubah menjadi Inspeksi Sosial Republik Indonesia. Inspeksi Sosial Provinsi Sumatera Barat berdiri pada tahun 1958 setelah pemekaran Provinsi Sumatera Tengah menjadi tiga provinsi: Sumatera Barat, Riau, dan Jambi. Inspeksi Sosial Provinsi Sumatera Barat pertama kali dipimpin oleh Abdul Muis.</li>
                <li><b>Era Jawatan Nasional Provinsi:</b> Pada tahun 1966, setelah peristiwa Gerakan 30 September, semua urusan yang berkaitan dengan kesejahteraan sosial ditangani oleh Jawatan Sosial. Jawatan Sosial Provinsi Sumatera Barat masih dipimpin oleh Muhammad Hasan Byk Dt. Maradjo.</li>
                <li><b>Era Kantor Wilayah Departemen Sosial:</b> Pada tahun 1975, berdasarkan Keputusan Presiden Nomor 44 dan 45 Tahun 1974, nama Jawatan Sosial diubah menjadi Kantor Wilayah Departemen Sosial. Penetapan ini dikukuhkan dengan Surat Keputusan Menteri Sosial Nomor 16 Tahun 1984. Era Kantor Wilayah Departemen Sosial berakhir pada 31 Desember 2000 dengan diberlakukannya UU Nomor 22 Tahun 1999 tentang Otonomi Daerah.</li>
                <li><b>Era Dinas Kesehatan dan Kesejahteraan Sosial:</b> Pada era otonomi, instansi vertikal diserahkan kepada pemerintah daerah. Kantor Wilayah Departemen Sosial diserahkan kepada Gubernur Provinsi Sumatera Barat. Berdasarkan Peraturan Daerah Nomor 5 Tahun 2001, terbentuk susunan organisasi tata kerja pemerintah yang mencakup Dinas Kesehatan dan Kesejahteraan Sosial. Namun, harapan bahwa sektor sosial dapat terwakili sepenuhnya tidak terwujud.</li>
                <li><b>Era Dinas Sosial:</b> Dinas Sosial Provinsi Sumatera Barat berdiri berdasarkan Peraturan Daerah Nomor 1 Tahun 2003. Susunan organisasi Dinas Sosial terdiri dari:</li>
            </ol>
            <ul>
                <li>Kepala Dinas dibantu Wakil</li>
                <li>Bagian Tata Usaha</li>
                <li>Sub Dinas Bina Program</li>
                <li>Sub Dinas Pemberdayaan Sosial</li>
                <li>Sub Dinas Pelayanan dan Rehabilitasi Sosial</li>
                <li>Sub Dinas Bantuan dan Jaminan Sosial</li>
                <li>Unit Pelaksana Teknis Daerah</li>
            </ul>
            <p>Kepala Dinas pertama, H. Amry, SH, dilantik pada 19 Mei 2003 bersama wakilnya, Drs. Achmad Charisma.</p>
            <h3>Daftar Nama Pimpinan Instansi Sosial di Sumatera Barat</h3>

            
            
        ";
        
        return view('detailSejarah', compact('sejarah'));
    }

    
}
