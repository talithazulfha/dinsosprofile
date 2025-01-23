@extends('layouts.main')
@section('title', 'Foto')
@section('content')

<div class="min-h-screen bg-white">
    <div class="container max-w-6xl mx-auto px-4 py-8">
        <!-- Back Button with animation -->
        <div class="py-6 animate-fade-in">
            <a href="#" class="group inline-flex items-center text-[#0E0C43] transition-all duration-300 hover:-translate-x-1">
                <span class="text-xl mr-2">←</span>
                <span class="text-sm font-medium">Kembali ke Galeri</span>
            </a>
        </div>

        <!-- Main Content Container -->
        <div class="bg-white rounded-xl shadow-xl overflow-hidden p-8 mt-8">
            <!-- Article Title with animation -->
            <div class="mb-6 animate-fade-in">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 flex items-center">

                        Wagub melakukan Kunjungan dan Penyerahan bantuan Hibah ke panti SLB Tarantang
                    </h1>

                </div>

                <!-- Article Metadata -->
                <div class="flex flex-wrap items-center text-sm text-gray-500 space-x-2">
                    <span class="inline-flex items-center">
                        <span class="mr-2">📅</span>
                        03 januari 2024
                    </span>
                    <span class="hidden sm:inline">•</span>
                    <span class="inline-flex items-center">
                        <span class="mr-2">👤</span>
                        Dinsos
                    </span>
                    <span class="hidden sm:inline">•</span>
                    <span class="inline-flex items-center">
                        <span class="mr-2">👁️</span>
                        90 kali dibaca
                    </span>
                </div>
            </div>

            <!-- Image Gallery Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8" style="animation: slide-up 0.8s ease-out 0.2s backwards">
                <div class="relative overflow-hidden rounded-xl shadow-lg group">
                    <img src="/path-to-image1.jpg" alt="Kunjungan 1" 
                         class="w-full h-72 object-cover transform transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="grid grid-rows-2 gap-4">
                    <div class="relative overflow-hidden rounded-xl shadow-lg group">
                        <img src="/path-to-image2.jpg" alt="Kunjungan 2" 
                             class="w-full h-[140px] object-cover transform transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="relative overflow-hidden rounded-xl shadow-lg group">
                        <img src="/path-to-image3.jpg" alt="Kunjungan 3" 
                             class="w-full h-[140px] object-cover transform transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                </div>
            </div>

            <!-- Article Content -->
            <div class="prose max-w-none" style="animation: slide-up 0.8s ease-out 0.4s backwards">
                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100 shadow-sm">
                    <span class="inline-block mb-4 text-xl">📝</span>
                    <p class="text-gray-700 leading-relaxed">
                        Dinas Sosial Provinsi Sumatera Barat, Kamis 21 September 2023, Kepala Bidang Rehabilitasi Sosial ibu Heni Yunida, SE bersama Wakil Gubernur Sumatera Barat Bapak Audy Joinaldi melakukan Kunjungan sekaligus menyerahkan bantuan Hibah ke panti SLB tarantang Kabupaten Limapuluh Kota, kunjungan ini juga didampingi langsung oleh Sekretaris Daerah Kabupaten Limapuluh Kota, Kepala Dinas Sosial Kabupaten Limapuluh Kota serta pendamping dari TKSK dan pengurus panti se Kabupaten Limapuluh Kota.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes fade-in {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    @keyframes slide-up {
        from {
            transform: translateY(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    
    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }
    
    html {
        scroll-behavior: smooth;
    }
</style>

@endsection