@extends('layouts.main')
@section('title', 'Video Gallery')
@section('content')

<div class="container max-w-6xl mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="text-center mb-12 mt-16 animate-fade-in">
        <h1 class="text-4xl font-bold text-[#0E0C43] mb-4">
            <span class="inline-block animate-bounce">🎥</span> Galeri Video
        </h1>
        <p class="text-gray-600">Dokumentasi video kegiatan Dinas Sosial Provinsi Sumatera Barat</p>
    </div>

    <!-- Search Bar with Animation -->

        <x-search-bar></x-search-bar>


    <!-- Featured Video -->
    <div class="mb-12 mt-12">
        <div class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:-translate-y-1 transition-all duration-500 group">
            <div class="p-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-bold text-gray-900 flex items-center">
                        <span class="inline-block mr-2">🎬</span>
                        Kegiatan Bakti Sosial Dinas Sosial Sumbar
                    </h2>
                    <span class="bg-red-100 text-red-800 text-xs font-medium px-3 py-1 rounded-full">
                        <span class="inline-block mr-1">🔥</span> Featured
                    </span>
                </div>

                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <span class="inline-block mr-2">📅</span>
                    03 Januari 2024
                    <span class="mx-2">•</span>
                    <span class="inline-block mr-2">👁️</span>
                    1,234 views
                    <span class="mx-2">•</span>
                    <span class="inline-block mr-2">⏱️</span>
                    10:25
                </div>

                <div class="relative aspect-w-16 aspect-h-9 mb-6 overflow-hidden rounded-lg group cursor-pointer">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all duration-300 flex items-center justify-center">
                        <div class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300">
                            <span class="text-3xl">▶️</span>
                        </div>
                    </div>
                    <img src="{{ asset('images/video-thumbnail.jpg') }}" 
                         alt="Video Thumbnail" 
                         class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-700">
                </div>

                <p class="text-gray-600 mb-6 leading-relaxed">
                    Video dokumentasi kegiatan bakti sosial yang dilaksanakan oleh Dinas Sosial Provinsi Sumatera Barat 
                    dalam rangka memperingati Hari Pahlawan.
                </p>

                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-500 flex items-center">
                            <span class="inline-block mr-1">👍</span> 245
                        </span>
                        <span class="text-gray-500 flex items-center">
                            <span class="inline-block mr-1">💬</span> 23
                        </span>
                        <span class="text-gray-500 flex items-center">
                            <span class="inline-block mr-1">🔄</span> Share
                        </span>
                    </div>
                    <a href="/detailVideo" class="inline-flex items-center px-6 py-3 bg-[#0E0C43] text-white rounded-full hover:bg-[#1a1860] transition-colors duration-300 group">
                        <span class="mr-2">Tonton Video</span>
                        <span class="transform group-hover:translate-x-1 transition-transform duration-300">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @for ($i = 1; $i <= 9; $i++)
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 group">
            <div class="p-4">
                <div class="relative overflow-hidden rounded-lg mb-4 cursor-pointer">
                    <!-- Thumbnail with Play Button Overlay -->
                    <div class="relative aspect-video">
                        <img src="{{ asset('images/video-thumbnail-small.jpg') }}" 
                             alt="Video Thumbnail" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-all duration-300 flex items-center justify-center">
                            <div class="w-12 h-12 bg-white/90 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300">
                                <span class="text-2xl">▶️</span>
                            </div>
                        </div>
                        <!-- Duration Badge -->
                        <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">
                            5:30
                        </div>
                    </div>
                </div>

                <div class="flex items-center text-sm text-gray-500 mb-2">
                    <span class="inline-block mr-2">📅</span>
                    03 Januari 2024
                    <span class="mx-2">•</span>
                    <span class="inline-block mr-2">👁️</span>
                    856 views
                </div>

                <h3 class="text-lg font-semibold text-gray-900 group-hover:text-[#0E0C43] transition-colors duration-300 mb-2">
                    Kegiatan Bakti Sosial Dinas Sosial Provinsi Sumatera Barat
                </h3>

                <div class="flex items-center justify-between text-sm">
                    <div class="flex items-center space-x-3">
                        <span class="text-gray-500 flex items-center">
                            <span class="inline-block mr-1">👍</span> 124
                        </span>
                        <span class="text-gray-500 flex items-center">
                            <span class="inline-block mr-1">💬</span> 12
                        </span>
                    </div>
                    <button class="text-[#0E0C43] hover:text-[#1a1860]">
                        <span class="inline-block transform hover:scale-110 transition-transform duration-300">🔄</span>
                    </button>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <!-- Pagination with Animation -->
    <div class="mt-12 transform hover:scale-102 transition-transform duration-300">
        <x-pagination></x-pagination>
    </div>
</div>

<style>
@keyframes fade-in {
    from { opacity: 0; }
    to { opacity: 1; }
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

/* Hover effect for play button */
.play-button {
    transition: transform 0.3s ease-in-out;
}

.play-button:hover {
    transform: scale(1.1);
}
</style>

@endsection