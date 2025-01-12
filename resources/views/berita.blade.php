@extends('layouts.main')
@section('title', 'Berita')
@section('content')


<div class="container mx-auto px-4 py-8">

    <div class="mt-16">
        <x-search-bar></x-search-bar>
    </div>

<div class="space-y-6">
    @for ($i = 1; $i <= 9; $i++)
    <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 mb-6">
        <div class="md:flex">
            <div class="md:w-1/3">
                <div class="grid grid-cols-3 gap-1 h-full">
                    <img src="/path/to/image1.jpg" alt="Event Image {{ $i }}" class="w-full h-full object-cover">
                    <img src="/path/to/image2.jpg" alt="Event Image {{ $i }}" class="w-full h-full object-cover">
                    <img src="/path/to/image3.jpg" alt="Event Image {{ $i }}" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="md:w-2/3 p-6">
                <div class="flex justify-between items-start mb-3">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <span class="text-gray-600">Administrator Dinsos</span>
                    </div>
                    <span class="text-gray-500 text-sm">03 Januari 2024</span>
                </div>

                <h2 class="text-xl font-bold text-gray-900 mb-3">
                    Dinsos Sumbar Gelar Peringatan Puncak HKSN sebagai Momentum Mengatasi Berbagai Permasalahan Sosial
                </h2>

                <p class="text-gray-600 mb-4">
                    DINSOS SUMBAR-- Peringatan HKSN menjadi momentum untuk mengaktualisasikan nilai-nilai kesetiakawanan sosial untuk mengatasi berbagai permasalahan sosial di Sumbar. Wakil Gubernur Sumbar, Audy Joinaldy, dalam sambutannya yang dibacakan oleh Sekretaris Dinsos Sumbar, Suyanto, menyebutkan bahwa Sumbar dan Indonesia secara umum tengah memacu pembangunan bangsa...
                </p>

                <div class="flex items-center justify-between">
                    <div class="flex items-center text-gray-500">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        1,294
                    </div>
                    <button class="inline-flex items-center px-4 py-2 bg-navy-900 text-white text-sm font-medium rounded-lg hover:bg-navy-800 transition-colors">
                        Lihat Detail
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </article>
    @endfor
</div>

    

</div>

<x-pagination></x-pagination>

@endsection