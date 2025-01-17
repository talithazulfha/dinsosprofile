@extends('layouts.main')
@section('title', 'Download')
@section('content')

<x-header>Download</x-header>

<div class="container mx-auto px-4 py-8 sm:px-6 lg:px-8">
    <!-- Hero Section -->
    <div class="mb-8 mt-16 text-center md:mb-12">
        <h1 class="text-4xl font-bold text-gray-900 mb-4 after:content-[''] after:block after:w-24 after:h-1 after:bg-blue-600 after:mt-4 after:mx-auto">
            Pusat Dokumen
        </h1>
        <p class="text-gray-600 max-w-2xl mx-auto text-lg mt-6">
            Akses dan unduh dokumen resmi dengan mudah dan aman
        </p>
    </div>


    
    <div class="mt-8 md:mt-10 bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gradient-to-r from-blue-50 to-white border-b border-gray-200">
                        <th class="px-8 py-5 text-left text-sm font-semibold text-gray-900">Judul</th>
                        <th class="px-8 py-5 text-left text-sm font-semibold text-gray-900 w-36">Tanggal</th>
                        <th class="px-8 py-5 text-left text-sm font-semibold text-gray-900">Diposkan Oleh</th>
                        <th class="px-8 py-5 text-center text-sm font-semibold text-gray-900 w-40">Download</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach(range(1, 15) as $index)
                    <tr class="hover:bg-blue-50/30 transition-colors duration-200">
                        <td class="px-8 py-6">
                            <div class="text-sm font-medium text-gray-900 hover:text-blue-600 transition-colors">
                                Formulir Permohonan Informasi Tahun 2024
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="text-sm text-gray-600">03 Januari 2024</div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="text-sm text-gray-600 flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Administrator Dinsos
                            </div>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <button class="group inline-flex items-center px-5 py-2.5 bg-blue-600 text-white text-sm font-medium rounded-lg 
                                       hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 
                                       transition-all duration-200 transform hover:-translate-y-0.5 hover:shadow-md">
                                <svg class="w-5 h-5 mr-2 transform group-hover:scale-110 transition-transform" 
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                <span class="group-hover:translate-x-0.5 transition-transform duration-200">
                                    Download
                                </span>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <x-pagination></x-pagination>
</div>

@endsection