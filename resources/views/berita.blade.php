@extends('layouts.main')
@section('title', 'Berita')
@section('content')


<div class="container max-w-6xl mx-auto px-4 py-8">

    <div class="text-center mt-16">
        <h1 class="text-4xl font-bold text-[#0E0C43] mb-4 animate-fade-in">
            <span class="inline-block">📰</span> Berita Terkini
        </h1>
        <p class="text-gray-600 animate-slide-up">Temukan informasi terbaru seputar kegiatan Dinas Sosial Provinsi Sumatera Barat</p>
    </div>

        <x-search-bar></x-search-bar>


<div class="space-y-8 mt-8">
    @for ($i = 1; $i <= 9; $i++)
    <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-1 group">
        <div class="md:flex">
            <!-- Image Gallery Section -->
            <div class="md:w-1/3 relative overflow-hidden">
                <div class="grid grid-cols-3 gap-0.5 h-full group-hover:scale-105 transition-transform duration-500">
                    <div class="relative overflow-hidden">
                        <img src="/path/to/image1.jpg" alt="Event Image {{ $i }}" class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="relative overflow-hidden">
                        <img src="/path/to/image2.jpg" alt="Event Image {{ $i }}" class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="relative overflow-hidden">
                        <img src="/path/to/image3.jpg" alt="Event Image {{ $i }}" class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                </div>
            </div>

            <!-- Content Section -->
            <div class="md:w-2/3 p-6">
                <!-- Author and Date -->
                <div class="flex justify-between items-start mb-4">
                    <div class="flex items-center space-x-2 group">
                        <div class="w-10 h-10 rounded-full bg-[#0E0C43] flex items-center justify-center text-white transform group-hover:rotate-12 transition-transform duration-300">
                            👨‍💼
                        </div>
                        <div>
                            <span class="text-gray-700 font-medium">Administrator Dinsos</span>
                            <div class="text-sm text-gray-500">
                                <span class="inline-block mr-1">📅</span> 03 Januari 2024
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-blue-500">
                            <span class="inline-block animate-bounce">📌</span>
                        </span>
                    </div>
                </div>

                <!-- Title -->
                <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#0E0C43] transition-colors duration-300">
                    <span class="inline-block mr-2">🎯</span>
                    Dinsos Sumbar Gelar Peringatan Puncak HKSN sebagai Momentum Mengatasi Berbagai Permasalahan Sosial
                </h2>

                <!-- Content -->
                <p class="text-gray-600 mb-6 line-clamp-3 group-hover:line-clamp-none transition-all duration-500">
                    DINSOS SUMBAR-- Peringatan HKSN menjadi momentum untuk mengaktualisasikan nilai-nilai kesetiakawanan sosial untuk mengatasi berbagai permasalahan sosial di Sumbar. Wakil Gubernur Sumbar, Audy Joinaldy, dalam sambutannya yang dibacakan oleh Sekretaris Dinsos Sumbar, Suyanto, menyebutkan bahwa Sumbar dan Indonesia secara umum tengah memacu pembangunan bangsa...
                </p>

                <!-- Footer -->
                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center text-gray-500 group">
                            <span class="inline-block transform group-hover:scale-110 transition-transform duration-300">👁️</span>
                            <span class="ml-2">1,294</span>
                        </div>
                        <div class="flex items-center text-gray-500 group">
                            <span class="inline-block transform group-hover:scale-110 transition-transform duration-300">💬</span>
                            <span class="ml-2">24</span>
                        </div>
                    </div>
                    <button class="inline-flex items-center px-6 py-2 bg-[#0E0C43] text-white text-sm font-medium rounded-full hover:bg-[#1a1860] transform hover:scale-105 transition-all duration-300 group">
                        <span class="mr-2">Baca Selengkapnya</span>
                        <span class="inline-block transform group-hover:translate-x-1 transition-transform duration-300">
                            →
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </article>
    @endfor
</div>

<x-pagination></x-pagination>  

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
    
    /* Replace SCSS with standard CSS for stagger animation */
    article:nth-child(1) { animation: slide-up 0.8s ease-out 0.1s backwards; }
    article:nth-child(2) { animation: slide-up 0.8s ease-out 0.2s backwards; }
    article:nth-child(3) { animation: slide-up 0.8s ease-out 0.3s backwards; }
    article:nth-child(4) { animation: slide-up 0.8s ease-out 0.4s backwards; }
    article:nth-child(5) { animation: slide-up 0.8s ease-out 0.5s backwards; }
    article:nth-child(6) { animation: slide-up 0.8s ease-out 0.6s backwards; }
    article:nth-child(7) { animation: slide-up 0.8s ease-out 0.7s backwards; }
    article:nth-child(8) { animation: slide-up 0.8s ease-out 0.8s backwards; }
    article:nth-child(9) { animation: slide-up 0.8s ease-out 0.9s backwards; }
    
    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }
    
    .animate-slide-up {
        animation: slide-up 0.8s ease-out;
    }
    
    /* Add smooth scrolling to the whole page */
    html {
        scroll-behavior: smooth;
    }
    
    /* Custom hover effect for images */
    .image-hover {
        transition: transform 0.3s ease-in-out;
    }
    
    .image-hover:hover {
        transform: scale(1.05);
    }
    </style>

    @endsection