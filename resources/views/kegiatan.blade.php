@extends('layouts.main')
@section('title', 'Kegiatan')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Search Bar -->
    <div class="mb-8 mt-16"> <!-- Menambahkan margin-top (mt-16) agar tidak tertutup navbar -->
        <div class="max-w-2xl mx-auto">
            <div class="relative">
                <input type="text" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" 
                       placeholder="Search">
                <button class="absolute right-3 top-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <!-- Featured Activity -->
    <div class="mb-12">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:w-96" 
                         src="{{ asset('images/jambore.jpg') }}" 
                         alt="Jambore Nasional">
                </div>
                <div class="p-8">
                    <div class="text-sm text-gray-500 mb-1">03 Januari 2024</div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Jambore Nasional Pramuka Anak</h2>
                    <p class="text-gray-600 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor 
                        congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus 
                        malesuada libero, sit amet commodo magna eros quis urna.
                    </p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">
                        Lihat Detail »
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Grid of Activities -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 9; $i++)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="w-full h-48 object-cover" 
                 src="{{ asset('images/alur-' . $i . '.jpg') }}" 
                 alt="Alur Pengaduan {{ $i }}">
            <div class="p-6">
                <div class="text-sm text-gray-500 mb-1">03 Januari 2024</div>
                <h3 class="font-semibold text-lg mb-2">
                    Alur Pengaduan Pelayanan Publik Dinas Sosial Provinsi Sumatera Barat
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Maecenas porttitor congue massa.
                </p>
                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                    Lihat Detail »
                </a>
            </div>
        </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="mt-8 flex justify-center space-x-2">
        <span class="px-3 py-1 bg-blue-900 text-white rounded">1</span>
        <a href="#" class="px-3 py-1 text-gray-700 hover:bg-gray-200 rounded">2</a>
        <a href="#" class="px-3 py-1 text-gray-700 hover:bg-gray-200 rounded">3</a>
        <a href="#" class="px-3 py-1 text-gray-700 hover:bg-gray-200 rounded">Next</a>
    </div>
</div>
@endsection


