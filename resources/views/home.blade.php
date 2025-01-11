@extends('layouts.main')
@section('title', 'Beranda')
@section('content')
<section class="relative h-[600px] mt-16"> <!-- Added mt-16 for navbar spacing -->
    <!-- Carousel Slides -->
    <div class="relative h-full">
        <div class="carousel-slide absolute inset-0 transition-opacity duration-500">
            <img src="{{ asset('images/hero-1.jpg') }}" alt="Hero 1" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-white text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Dinas Sosial Provinsi Sumater Barat</h1>
                    <p class="text-xl">Slide 1 Description</p>
                </div>
            </div>
        </div>
        <div class="carousel-slide absolute inset-0 transition-opacity duration-500 hidden">
            <img src="{{ asset('images/hero-2.jpg') }}" alt="Hero 2" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-white text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Pelayanan Sosial</h1>
                    <p class="text-xl">Slide 2 Description</p>
                </div>
            </div>
        </div>
        <!-- Add more slides as needed -->

        <!-- Carousel Controls -->
        <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full" onclick="previousSlide()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full" onclick="nextSlide()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>

        <!-- Carousel Indicators -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 carousel-indicators">
            <button class="carousel-indicator active" onclick="showSlide(0)"></button>
            <button class="carousel-indicator" onclick="showSlide(1)"></button>
            <!-- Add more indicators as needed -->
        </div>
    </div>
</section>
    
        <!-- Kata Sambutan -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-3xl font-semibold mb-6">Kata Sambutan</h2>
                    <div class="flex flex-col md:flex-row gap-8 items-start">
                        <div class="md:w-1/4">
                            <img src="{{ asset('images/kepala-dinas.jpg') }}" alt="Kepala Dinas" class="w-full rounded-lg">
                            <p class="mt-4 text-center font-semibold">H. ARDA SAPAR,SE.MM</p>
                            <p class="text-center text-gray-600">NIP: 196901223 199203 1 070</p>
                        </div>
                        <div class="md:w-3/4">
                            <p class="text-gray-700 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Berita Section dengan Horizontal Scroll -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold mb-8">BERITA</h2>
        <div class="relative">
            <div class="news-scroll overflow-x-auto pb-6">
                <div class="flex space-x-6 w-max">
                    <!-- Berita Cards -->
                    @for ($i = 1; $i <= 8; $i++)
                    <div class="flex-none w-80">
                        <div class="bg-white rounded-lg shadow overflow-hidden">
                            <img src="{{ asset('images/berita-' . $i . '.jpg') }}" alt="Berita {{ $i }}" 
                                 class="w-full h-48 object-cover">
                            <div class="p-4">
                                <div class="text-sm text-gray-500 mb-2">{{ date('d M Y') }}</div>
                                <h3 class="font-semibold text-xl mb-2">Judul Berita {{ $i }}</h3>
                                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                <a href="#" class="text-blue-600 hover:text-blue-800">Baca selengkapnya →</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
    
        <!-- Layanan Section -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-semibold mb-8">LAYANAN</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @for ($i = 1; $i <= 3; $i++)
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="font-semibold text-xl mb-4">Layanan {{ $i }}</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Selengkapnya</a>
                    </div>
                    @endfor
                </div>
            </div>
        </section>
    
        <!-- Lokasi Section -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-semibold mb-8">Lokasi</h2>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3172098140285"
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
@endsection