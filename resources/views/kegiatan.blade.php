@extends('layouts.main')
@section('title', 'Kegiatan')
@section('content')


<x-header>Kegiatan</x-header>
<div class="container max-w-6xl mx-auto px-4 py-8">


@push('styles')
<style>
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    @keyframes pulse-shadow {
        0% { box-shadow: 0 0 0 0 rgba(14, 12, 67, 0.4); }
        70% { box-shadow: 0 0 0 10px rgba(14, 12, 67, 0); }
        100% { box-shadow: 0 0 0 0 rgba(14, 12, 67, 0); }
    }

    @keyframes slide-in {
        0% { transform: translateX(-100%); opacity: 0; }
        100% { transform: translateX(0); opacity: 1; }
    }

    .float-animation {
        animation: float 3s ease-in-out infinite;
    }

    .pulse-shadow {
        animation: pulse-shadow 2s infinite;
    }

    .slide-in {
        animation: slide-in 0.5s ease-out;
    }

    .hover-bounce:hover {
        animation: bounce 0.5s;
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
</style>
@endpush

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Search Bar with animation -->
    <div class="mb-8 mt-16 transform transition-all duration-500 hover:scale-105">
        <div class="max-w-2xl mx-auto">
            <div class="relative group">
                <input type="text" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 transition-all duration-300 ease-in-out" 
                       placeholder="Search">
                <button class="absolute right-3 top-2 transform transition-all duration-300 group-hover:rotate-90">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>



<!-- Featured Activity (Center large activity) -->
<div class="mb-12 flex justify-center">
    <div class="w-full max-w-4xl">
        <div class="md:flex">
            <div class="md:flex-shrink-0">
                <!-- Menyesuaikan gambar agar lebih besar dan memenuhi lebar container -->
                <img class="w-full h-96 object-cover" 
                     src="{{ asset('images/jambore.png') }}" 
                     alt="Jambore Nasional">
            </div>
            <div class="p-8">
                <!-- Menambahkan jarak antara gambar dan teks -->
                <div class="text-sm text-gray-500 mb-1">03 Januari 2024</div>
                <h2 class="text-2xl font-bold text-[#0E0C43] mb-4" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
                    Jambore Nasional Pramuka Anak
                </h2>
                <p class="text-gray-600 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor 
                    congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus 
                    malesuada libero, sit amet commodo magna eros quis urna.
                </p>
                <a href="{{ route('detailKegiatan', ['id' => 1]) }}" class="text-black hover:text-gray-600 font-medium block text-right">
                    Lihat Detail »
                </a>

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
</div>

    <!-- Grid of Activities with hover animations -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 9; $i++)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-bounce transform transition-all duration-300 hover:shadow-2xl"
             style="animation-delay: {{ $i * 100 }}ms">
            <img class="w-full h-48 object-cover transform transition-transform duration-500 hover:scale-110" 
                 src="{{ asset('images/alur-' . $i . '.jpg') }}" 
                 alt="Alur Pengaduan {{ $i }}">
            <div class="p-6">
                <div class="text-sm text-gray-500 mb-1 transform transition-all duration-300 hover:translate-x-2">
                    03 Januari 2024
                </div>
                <h3 class="font-semibold text-lg mb-2 transform transition-all duration-300 hover:translate-x-2">
                    Alur Pengaduan Pelayanan Publik Dinas Sosial Provinsi Sumatera Barat
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Maecenas porttitor congue massa.
                </p>
                <a href="{{ route('detailKegiatan', ['id' => $i]) }}" 
                   class="text-blue-600 hover:text-blue-800 text-sm font-medium transform transition-all duration-300 hover:translate-x-2 inline-block">
                    Lihat Detail »
                </a>
            </div>
        </div>
        @endfor
    </div>

    <!-- Pagination with hover effects -->
    <div class="mt-8 flex justify-center space-x-2">
        <span class="px-3 py-1 bg-blue-900 text-white rounded transform transition-all duration-300 hover:scale-110">1</span>
        <a href="#" class="px-3 py-1 text-gray-700 hover:bg-gray-200 rounded transform transition-all duration-300 hover:scale-110">2</a>
        <a href="#" class="px-3 py-1 text-gray-700 hover:bg-gray-200 rounded transform transition-all duration-300 hover:scale-110">3</a>
        <a href="#" class="px-3 py-1 text-gray-700 hover:bg-gray-200 rounded transform transition-all duration-300 hover:scale-110">Next</a>
    </div>
</div>
@endsection