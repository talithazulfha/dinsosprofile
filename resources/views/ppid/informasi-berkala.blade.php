@extends('layouts.main')
@section('title', 'Informasi Berkala')
@section('content')

<div class="max-w-6xl mx-auto px-4 py-12">
    <!-- Header Section -->
    <div class="text-center mb-12 animate-fade-in mt-16">
        <h1 class="text-3xl md:text-4xl font-bold text-[#0E0C43] mb-3 flex items-center justify-center gap-3">
            <span class="inline-block transform hover:rotate-12 transition-transform duration-300">📑</span>
            Informasi Berkala
        </h1>
        <div class="w-20 h-1 bg-[#0E0C43] mx-auto mb-4"></div>
        <p class="text-gray-600 max-w-2xl mx-auto">
            Pejabat Pengelola Informasi dan Dokumentasi Dinas Sosial Provinsi Sumatera Barat
        </p>
    </div>

    <!-- Content Section -->
    <div class="space-y-6 animate-fade-up">
        @if(isset($clusterData['error']))
            <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-md">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-red-700">
                            Error: {{ $clusterData['error'] }}
                        </p>
                    </div>
                </div>
            </div>
        @elseif(isset($clusterData['data']) && count($clusterData['data']) > 0)
            <div class="grid gap-6 animate-fade-up">
                @foreach($clusterData['data'] as $item)
                    <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-300 p-6 group">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-[#0E0C43] mb-3 group-hover:text-[#1a1860] transition-colors duration-300">
                                    {{ $item['title'] ?? 'No Title' }}
                                </h3>
                                <p class="text-gray-600 mb-4 leading-relaxed">
                                    {{ $item['description'] ?? 'No Description' }}
                                </p>
                            </div>
                            @if(isset($item['file_url']))
                                <a href="{{ $item['file_url'] }}" 
                                   class="inline-flex items-center px-4 py-2 bg-[#0E0C43] text-white text-sm font-medium rounded-full hover:bg-[#1a1860] transform hover:scale-105 transition-all duration-300 ml-4"
                                   target="_blank">
                                    <span class="mr-2">Download</span>
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if(isset($clusterData['meta']))
                <div class="flex justify-center mt-8">
                    <nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        @for($i = 1; $i <= $clusterData['meta']['last_page']; $i++)
                            <a href="{{ route('ppid.profil', ['page' => $i]) }}"
                               class="relative inline-flex items-center px-4 py-2 {{ $currentPage == $i 
                                    ? 'bg-[#0E0C43] text-white' 
                                    : 'bg-white text-gray-500 hover:bg-gray-50' }} 
                                    text-sm font-medium border border-gray-300 transition-colors duration-300
                                    {{ $i === 1 ? 'rounded-l-md' : '' }}
                                    {{ $i === $clusterData['meta']['last_page'] ? 'rounded-r-md' : '' }}">
                                {{ $i }}
                            </a>
                        @endfor
                    </nav>
                </div>
            @endif
        @else
            <div class="text-center py-12">
                <div class="inline-block p-4 rounded-full bg-gray-100 mb-4">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
                <p class="text-gray-600">Tidak ada data yang tersedia saat ini.</p>
            </div>
        @endif
    </div>

    @if(config('app.debug'))
        <div class="mt-8 p-4 bg-gray-50 rounded-lg">
            <details class="text-sm">
                <summary class="text-gray-600 cursor-pointer hover:text-[#0E0C43] transition-colors duration-300">
                    Debug Information
                </summary>
                <pre class="mt-2 p-4 bg-white rounded-md overflow-x-auto">{{ print_r($clusterData, true) }}</pre>
            </details>
        </div>
    @endif
</div>

<style>
@keyframes fade-in {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

@keyframes fade-up {
    0% { 
        opacity: 0;
        transform: translateY(20px);
    }
    100% { 
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 0.8s ease-out forwards;
}

.animate-fade-up {
    animation: fade-up 0.6s ease-out forwards;
}

/* Staggered animation for items */
.grid > div {
    opacity: 0;
    animation: fade-up 0.6s ease-out forwards;
}

.grid > div:nth-child(1) { animation-delay 0.8s ease-out 0.1s backwards; }
    .grid > div:nth-child(2) { animation-delay 0.8s ease-out 0.2s backwards; }
    .grid > div:nth-child(3) { animation-delay 0.8s ease-out 0.3s backwards; }
    .grid > div:nth-child(4) { animation-delay 0.8s ease-out 0.4s backwards; }
    .grid > div:nth-child(5) { animation-delay 0.8s ease-out 0.5s backwards; }
    .grid > div:nth-child(6) { animation-delay 0.8s ease-out 0.6s backwards; }
    .grid > div:nth-child(7) { animation-delay 0.8s ease-out 0.7s backwards; }
    .grid > div:nth-child(8) { animation-delay 0.8s ease-out 0.8s backwards; }
    .grid > div:nth-child(9) { animation-delay 0.8s ease-out 0.9s backwards; }
</style>

@endsection