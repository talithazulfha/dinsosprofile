@extends('layouts.main')
@section('title', 'Foto')
@section('content')



<div class="container max-w-6xl mx-auto px-4 py-8">

    <div class="text-center mb-8 mt-16 animate-fade-in">
        <h1 class="text-4xl font-bold text-[#0E0C43] mb-4">
            <span class="inline-block animate-bounce">📸</span> Galeri Foto
        </h1>
        <p class="text-gray-600">Dokumentasi kegiatan dan momen penting Dinas Sosial Provinsi Sumatera Barat</p>
    </div>

        <x-search-bar></x-search-bar>

    <!-- Featured Document -->
<div class="mb-12 mt-12">
        <div class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:-translate-y-1 transition-all duration-500 group">
            <div class="p-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-bold text-gray-900 flex items-center">
                        <span class="inline-block mr-2">📊</span>
                        Alur Pengaduan Pelayanan Publik
                    </h2>
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-3 py-1 rounded-full">
                        <span class="inline-block mr-1">🌟</span> Featured
                    </span>
                </div>
                
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <span class="inline-block mr-2">📅</span>
                    03 Januari 2024
                    <span class="mx-2">•</span>
                    <span class="inline-block mr-2">👁️</span>
                    1,234 views
                </div>

                <div class="relative aspect-w-16 aspect-h-9 mb-6 overflow-hidden rounded-lg group">
                    <img src="{{ asset('images/flow-diagram.jpg') }}" 
                         alt="Flow Diagram" 
                         class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <p class="text-gray-600 mb-6 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies.
                </p>

                <a href="/detailFoto" class="inline-flex items-center px-6 py-3 bg-[#0E0C43] text-white rounded-full hover:bg-[#1a1860] transition-colors duration-300 group">
                    <span class="mr-2">Lihat Detail</span>
                    <span class="transform group-hover:translate-x-1 transition-transform duration-300">→</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Document Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @for ($i = 1; $i <= 9; $i++)
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 group">
            <div class="p-4">
                <div class="relative overflow-hidden rounded-lg mb-4">
                    <img src="{{ asset('images/flow-diagram-small.jpg') }}" 
                         alt="Flow Diagram" 
                         class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-end p-4">
                        <button class="bg-white/90 p-2 rounded-full transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                            <span class="text-xl">🔍</span>
                        </button>
                    </div>
                </div>

                <div class="flex items-center text-sm text-gray-500 mb-2">
                    <span class="inline-block mr-2">📅</span>
                    03 Januari 2024
                    <span class="mx-2">•</span>
                    <span class="inline-block mr-2">👁️</span>
                    856 views
                </div>

                <h3 class="text-lg font-semibold text-gray-900 group-hover:text-[#0E0C43] transition-colors duration-300">
                    Alur Pengaduan Pelayanan Publik Dinas Sosial Provinsi Sumatera Barat
                </h3>
            </div>
        </div>
        @endfor
    </div>

<x-pagination></x-pagination>

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
    
    /* Stagger animation for grid items */
    .grid > div:nth-child(1) { animation: slide-up 0.8s ease-out 0.1s backwards; }
    .grid > div:nth-child(2) { animation: slide-up 0.8s ease-out 0.2s backwards; }
    .grid > div:nth-child(3) { animation: slide-up 0.8s ease-out 0.3s backwards; }
    .grid > div:nth-child(4) { animation: slide-up 0.8s ease-out 0.4s backwards; }
    .grid > div:nth-child(5) { animation: slide-up 0.8s ease-out 0.5s backwards; }
    .grid > div:nth-child(6) { animation: slide-up 0.8s ease-out 0.6s backwards; }
    .grid > div:nth-child(7) { animation: slide-up 0.8s ease-out 0.7s backwards; }
    .grid > div:nth-child(8) { animation: slide-up 0.8s ease-out 0.8s backwards; }
    .grid > div:nth-child(9) { animation: slide-up 0.8s ease-out 0.9s backwards; }
    
    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }
    
    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
    </style>

@endsection