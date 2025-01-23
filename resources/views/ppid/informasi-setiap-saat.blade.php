@extends('layouts.main')
@section('title', 'Informasi Tersedia Setiap Saat')
@section('content')

<div class="max-w-5xl mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="mb-8 mt-16">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-[#0E0C43] mb-3">
                <span class="inline-block transform hover:rotate-12 transition-transform duration-300">📑</span>
                Informasi Tersedia Setiap Saat
            </h1>
            <div class="w-20 h-1 bg-[#0E0C43] mx-auto mb-4"></div>
            <p class="text-gray-600">Pejabat Pengelola Informasi dan Dokumentasi</p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="space-y-6">
        @if(isset($clusterData['error']))
            <!-- Error State -->
            <div class="bg-red-50 p-4 rounded-lg border-l-4 border-red-500">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Error Icon -->
                        <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-red-700">{{ $clusterData['error'] }}</p>
                    </div>
                </div>
            </div>
        @elseif(isset($clusterData['data']) && count($clusterData['data']) > 0)
            <div class="grid gap-6">
                @foreach($clusterData['data'] as $item)
                    <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden border border-gray-100">
                        <div class="p-6">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <div class="flex-1">
                                    <h2 class="text-xl font-semibold text-[#0E0C43] mb-2 hover:text-[#1a1860] transition-colors duration-300">
                                        {{ $item['title'] ?? 'No Title' }}
                                    </h2>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        {{ $item['description'] ?? 'No Description' }}
                                    </p>
                                </div>
                                @if(isset($item['file_url']))
                                    <div class="flex-shrink-0">
                                        <a href="{{ $item['file_url'] }}" 
                                           class="inline-flex items-center px-4 py-2 bg-[#0E0C43] text-white text-sm font-medium rounded-lg hover:bg-[#1a1860] transition-all duration-300 transform hover:-translate-y-0.5"
                                           target="_blank">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                                            </svg>
                                            Download File
                                        </a>
                                    </div>
                                @endif
                            </div>
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
                               class="relative inline-flex items-center px-4 py-2 text-sm font-medium
                                    {{ $currentPage == $i 
                                        ? 'z-10 bg-[#0E0C43] text-white' 
                                        : 'bg-white text-gray-500 hover:bg-gray-50 border border-gray-300' }}
                                    first:rounded-l-md last:rounded-r-md transition-colors duration-300">
                                {{ $i }}
                            </a>
                        @endfor
                    </nav>
                </div>
            @endif
        @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="inline-block p-3 rounded-full bg-gray-100 mb-4">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
                <p class="text-gray-500 text-lg">Tidak ada data yang tersedia saat ini</p>
            </div>
        @endif
    </div>

    <!-- Debug Information -->
    @if(config('app.debug'))
        <div class="mt-8">
            <details class="bg-gray-50 rounded-lg overflow-hidden">
                <summary class="px-4 py-3 text-sm text-gray-700 cursor-pointer hover:bg-gray-100 transition-colors duration-200">
                    Debug Information
                </summary>
                <div class="p-4 bg-white border-t border-gray-200">
                    <pre class="text-xs overflow-x-auto">{{ print_r($clusterData, true) }}</pre>
                </div>
            </details>
        </div>
    @endif
</div>

<style>
/* Smooth animations */
.transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
}

/* Hover effects */
.hover\:shadow-md:hover {
    box-shadow: 0 4px 6px -1px rgba(14, 12, 67, 0.1),
                0 2px 4px -1px rgba(14, 12, 67, 0.06);
}

/* Focus styles */
a:focus, button:focus {
    outline: 2px solid #0E0C43;
    outline-offset: 2px;
}

/* Ensure smooth scrolling */
html {
    scroll-behavior: smooth;
}
</style>

@endsection