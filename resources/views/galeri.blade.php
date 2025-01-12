@extends('layouts.main')
@section('title', 'Galeri')
@section('content')

<x-search-bar></x-search-bar>

<div class="container mx-auto px-4 py-8">
    <!-- Featured Document -->
    <div class="mb-12">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">
                    Alur Pengaduan Pelayanan Publik
                </h2>
                <p class="text-sm text-gray-500 mb-4">03 Januari 2024</p>
                <div class="aspect-w-16 aspect-h-9 mb-4">
                    <img src="{{ asset('images/flow-diagram.jpg') }}" 
                         alt="Flow Diagram" 
                         class="object-contain w-full h-full rounded-lg">
                </div>
                <p class="text-gray-600 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies.
                </p>
                <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700">
                    Lihat Detail
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Document Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 9; $i++)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="p-4">
                <img src="{{ asset('images/flow-diagram-small.jpg') }}" 
                     alt="Flow Diagram" 
                     class="w-full h-48 object-cover rounded-lg mb-4">
                <p class="text-sm text-gray-500 mb-2">03 Januari 2024</p>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    Alur Pengaduan Pelayanan Publik Dinas Sosial Provinsi Sumatera Barat
                </h3>
            </div>
        </div>
        @endfor
    </div>

<x-pagination></x-pagination>

@endsection