@extends('layouts.main')
@section('title', 'Download')
@section('content')

<x-search-bar></x-search-bar>

<div class="max-w-7xl mx-auto px-4 pb-12">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-50 border-b">
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Judul</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900 w-32">Tanggal</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Diposkan Oleh</th>
                        <th class="px-6 py-4 text-center text-sm font-semibold text-gray-900 w-32">Download</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach(range(1, 15) as $index)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">Formulir Permohonan Informasi Tahun 2024</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">03 Januari 2024</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">Oleh : Administrator Dinsos</div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="inline-flex items-center px-4 py-2 bg-navy-900 text-white text-sm font-medium rounded hover:bg-navy-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-navy-500 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                </svg>
                                Download
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

<x-pagination></x-pagination>

@endsection