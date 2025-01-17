@extends('layouts.main')
@section('title', 'Video Gallery')
@section('content')

<x-header>Video</x-header>


<div class="container max-w-6xl mx-auto px-4 py-8">



    <!-- Video Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
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
                <a href="" 
                class="inline-block w-full bg-[#23216a] text-white px-6 py-3 rounded-lg text-center 
                       transition-all duration-300 hover:bg-[#0E0C43] hover:shadow-xl hover:-translate-y-1 
                       relative overflow-hidden group">
                 <span class="relative z-10">Baca Selengkapnya</span>
                 <div class="absolute inset-0 w-0 bg-[#0E0C43] transition-all duration-300 ease-out group-hover:w-full"></div>
             </a>

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