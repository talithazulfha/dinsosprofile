@extends('layouts.main')
@section('title', 'Foto')
@section('content')

<!-- resources/views/news-detail.blade.php -->
<div class="min-h-screen bg-gray-50">
    <!-- Back Button -->
    <div class="container mx-auto px-4 py-4">
        <a href="#" class="inline-flex items-center text-gray-700 hover:text-gray-900">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
        </a>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Article Title -->
        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
            Wagub melakukan Kunjungan dan Penyerahan bantuan Hibah ke panti SLB Tarantang Kab 50 kota
        </h1>

        <!-- Article Metadata -->
        <div class="flex items-center text-sm text-gray-600 mb-8">
            <span>03 januari 2024</span>
            <span class="mx-2">•</span>
            <span>Oleh: Dinsos</span>
            <span class="mx-2">•</span>
            <span>90 kali dibaca</span>
        </div>

        <!-- Image Gallery Grid -->
        <div class="grid grid-cols-2 gap-4 mb-8">
            <div class="col-span-2 md:col-span-1">
                <img src="/path-to-image1.jpg" alt="Kunjungan 1" class="w-full h-64 object-cover rounded-lg">
            </div>
            <div class="grid grid-rows-2 gap-4">
                <img src="/path-to-image2.jpg" alt="Kunjungan 2" class="w-full h-32 object-cover rounded-lg">
                <img src="/path-to-image3.jpg" alt="Kunjungan 3" class="w-full h-32 object-cover rounded-lg">
            </div>
        </div>

        <!-- Article Content -->
        <div class="prose max-w-none">
            <p class="text-gray-700 leading-relaxed">
                Dinas Sosial Provinsi Sumatera Barat, Kamis 21 September 2023, Kepala Bidang Rehabilitasi Sosial ibu Heni Yunida, SE bersama Wakil Gubernur Sumatera Barat Bapak Audy Joinaldi melakukan Kunjungan sekaligus menyerahkan bantuan Hibah ke panti SLB tarantang Kabupaten Limapuluh Kota, kunjungan ini juga didampingi langsung oleh Sekretaris Daerah Kabupaten Limapuluh Kota, Kepala Dinas Sosial Kabupaten Limapuluh Kota serta pendamping dari TKSK dan pengurus panti se Kabupaten Limapuluh Kota.
            </p>
        </div>
    </main>
</div>

@endsection