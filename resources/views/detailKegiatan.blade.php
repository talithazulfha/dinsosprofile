@extends('layouts.main')
@section('title', 'Profil')
@section('content')

<!-- Content Section -->
<div class="w-full px-6 py-8">
    <!-- Back Button (diletakkan di bawah navbar dengan padding) -->
    <div class="mb-8 pt-20"> <!-- Add padding-top to give space for the navbar -->
<a href="#" onclick="history.back()" 
   class="inline-flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-400 hover:bg-gray-200 transition duration-300 transform hover:scale-110 ml-2 pt-4"
   style="background-color: #0E0C43; box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);">
    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
    </svg>
</a>
    </div>
</div>


<!-- Article Content -->
<div class="max-w-5xl mx-auto animate-fadeIn">
    <!-- Title and Meta -->
    <div class="mb-6">
        <h1 class="text-[32px] font-semibold text-[#0E0C43] mb-2" 
            style="text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.2);">
            Jambore Nasional Pramuka Anak
        </h1>
        <div class="text-gray-600">
            <span>03 Januari 2024</span>
            <span class="mx-1">.</span>
            <span>Oleh : Dinsos</span>
            <span class="mx-1">.</span>
            <span>90 kali dibaca</span>
        </div>
    </div>

    <!-- Main Image -->
    <div class="mb-5">
        <img src="{{ asset('images/jambore.png') }}" alt="Jambore Nasional Pramuka Anak" 
             class="w-full max-w-lg h-auto mx-auto transition-transform duration-500 hover:scale-105">
    </div>

    <!-- Event Details -->
    <div class="space-y-4 mb-8">
        <div class="flex">
            <span class="text-gray-800 w-48 font-bold">Tanggal mulai Kegiatan</span>
            <span class="text-gray-800 ml-4 font-bold">: Sabtu, 22 Juli 2023</span>
        </div>
        <div class="flex">
            <span class="text-gray-800 w-48 font-bold">Tanggal selesai Kegiatan</span>
            <span class="text-gray-800 ml-4 font-bold">: Sabtu, 22 Juli 2023</span>
        </div>
        <div class="flex">
            <span class="text-gray-800 w-48 font-bold">Lokasi Kegiatan</span>
            <span class="text-gray-800 ml-4 font-bold">: Bukittinggi</span>
        </div>
    </div>

    <!-- Description -->
    <div class="text-gray-800">
        <p class="font">Dinas Sosial Provinsi Sumatera Barat, Akan melaksanakan Event Nasional yaitu Jambore Nasional Pramuka Anak Di Bukittinggi yang akan dilaksanakan pada tanggal 22 - 25 Juli 2023</p>
    </div>
</div>


<!-- Tailwind CSS Animations -->
<style>
    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    .animate-fadeIn {
        animation: fadeIn 1s ease-out;
    }
</style>

@endsection
