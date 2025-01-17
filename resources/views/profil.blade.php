@extends('layouts.main')
@section('title', 'Profil')
@section('content')


<section class="bg-white">
    <div class="container mx-auto px-4">
        <div class="flex items-center mb-8">
            <a href="/" class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4 mt-16">
        <h1 class="text-3xl font-bold text-navy-900 mb-8 text-center">Tentang DINSOS</h1>
        
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/home.png') }}" alt="Kantor Dinas Sosial" 
                     class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="md:w-1/2 space-y-4">
                <p class="text-gray-600 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor 
                    congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus 
                    malesuada libero, sit amet commodo magna eros quis urna.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque 
                    habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </p>
            </div>

        </div>

        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-navy-900 mb-4">Jambore Nasional Pramuka Anak</h1>
            <div class="text-gray-600 mb-8">
                <span>03 januari 2024</span>
                <span class="mx-2">·</span>
                <span>Oleh: Dinsos</span>
                <span class="mx-2">·</span>
                <span>90 kali dibaca</span>
            </div>

            <div class="mb-8">
                <img src="{{ asset('images/jambore-banner.jpg') }}" alt="Jambore Nasional Pramuka Anak" 
                     class="w-full h-auto rounded-lg shadow-lg">
            </div>

            <div class="space-y-6 bg-white rounded-lg shadow-sm p-6">
                <div>
                    <div class="mb-4">
                        <span class="font-medium">Tanggal mulai Kegiatan : </span>
                        <span>Sabtu, 22 Juli 2023</span>
                    </div>
                    <div class="mb-4">
                        <span class="font-medium">Tanggal selesai Kegiatan : </span>
                        <span>Sabtu, 22 Juli 2023</span>
                    </div>
                    <div class="mb-4">
                        <span class="font-medium">Lokasi Kegiatan : </span>
                        <span>Bukittinggi</span>
                    </div>
                </div>
            </div>

            <div class="mt-6 text-gray-600">
                <p>Dinas Sosial Provinsi Sumatera Barat, Akan melaksanakan Event Nasional yaitu Jambore Nasional Pramuka Anak Di Bukittinggi yang akan dilaksanakan pada tanggal 22 - 25 Juli 2023</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-navy-900 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">Hubungi Kami</h3>
                <div class="space-y-2">
                    <p>Alamat : Jl. Khatib Sulaiman No. 5 Padang</p>
                    <p>Telp : (0751) 7051465</p>
                    <p>Fax : (0751) 7057284</p>
                    <p>Email : dinsos@sumbarprov.go.id</p>
                </div>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-4">Tentang Kami</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-300">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-gray-300">Kontak</a></li>
                    <li><a href="#" class="hover:text-gray-300">Kebijakan</a></li>
                    <li><a href="#" class="hover:text-gray-300">Syarat & ketentuan</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-4">Link Terkait</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-300">Sumbarprov</a></li>
                    <li><a href="#" class="hover:text-gray-300">Simaya Sumbar</a></li>
                    <li><a href="#" class="hover:text-gray-300">Portal E-Government</a></li>
                    <li><a href="#" class="hover:text-gray-300">Kominfo</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<footer class="bg-navy-900 text-white py-4 border-t border-gray-700">
    <div class="container mx-auto px-4 text-center">
        <p>©2025 Dinas Sosial Provinsi Sumatera Barat | by Diskominfo Sumbar</p>
    </div>
</footer>

@endsection