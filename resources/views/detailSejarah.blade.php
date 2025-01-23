@extends('layouts.main')
@section('title', 'Sejarah')
@section('content')

<div class="min-h-screen bg-white">
    <div class="container max-w-6xl mx-auto px-4 py-16">
        <!-- Header Section -->
        <div class="text-center mb-12 animate-fade-in mt-16">
            <h1 class="text-4xl font-bold text-[#0E0C43] mb-4">
                <span class="inline-block mr-2">📚</span> Sejarah DINSOS
            </h1>
            <p class="text-gray-600">Perjalanan dan perkembangan Dinas Sosial Provinsi Sumatera Barat</p>
        </div>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-12 transform hover:shadow-xl transition-all duration-500" 
             style="animation: slide-up 0.8s ease-out 0.2s backwards">
            <div class="prose max-w-none">
                <div class="text-gray-600 leading-relaxed">
                    {!! $sejarah !!}
                </div>
            </div>
        </div>

        <!-- Leadership History Section -->
        <div class="bg-white rounded-xl shadow-lg p-8" 
             style="animation: slide-up 0.8s ease-out 0.4s backwards">
            <div class="flex items-center mb-8">
                <span class="text-2xl mr-3">👥</span>
                <h2 class="text-2xl font-bold text-[#0E0C43]">Sejarah Pimpinan Dinas Sosial</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-[#0E0C43]/5">
                            <th class="px-6 py-4 text-left text-sm font-semibold text-[#0E0C43]">No</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-[#0E0C43]">Tahun</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-[#0E0C43]">Nama Pimpinan</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-[#0E0C43]">Nama Instansi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @for ($i = 1; $i <= 19; $i++)
                        <tr class="group hover:bg-[#0E0C43]/5 transition-colors duration-200">
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $i }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">
                                @switch($i)
                                    @case(1)
                                        1946 – 1947
                                        @break
                                    @case(2)
                                        1947 – 1947
                                        @break
                                    @case(3)
                                        1947 – 1958
                                        @break
                                    @case(4)
                                        1958 – 1963
                                        @break
                                    @case(5)
                                        1963 – 1977
                                        @break
                                    @case(6)
                                        1977 – 1981
                                        @break
                                    @case(7)
                                        1981 – 1988
                                        @break
                                    @case(8)
                                        1988 – 1994
                                        @break
                                    @case(9)
                                        1994 – 1997
                                        @break
                                    @case(10)
                                        1997 – 1999
                                        @break
                                    @case(11)
                                        1999 – 2000
                                        @break
                                    @case(12)
                                        2000 – 2003
                                        @break
                                    @case(13)
                                        2003 – 2006
                                        @break
                                    @case(14)
                                        2006 – 2008
                                        @break
                                    @case(15)
                                        2009 – 2010
                                        @break
                                    @case(16)
                                        2011 – 2018
                                        @break
                                    @case(17)
                                        2019 – 2022
                                        @break
                                    @case(18)
                                        2022 – 2023
                                        @break
                                    @default
                                        2023 – sekarang
                                @endswitch
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900 font-medium">
                                @switch($i)
                                    @case(1)
                                        Bgd. M. Thahar
                                        @break
                                    @case(2)
                                        Marah Kaharuddin
                                        @break
                                    @case(3)
                                        A. Malik Ahmad
                                        @break
                                    @case(4)
                                        Abdul Muis
                                        @break
                                    @case(5)
                                        H. M. Hasan Byk Dt. Maradjo
                                        @break
                                    @case(6)
                                        Sofyan Yahya, BA
                                        @break
                                    @case(7)
                                        M. Sjafe'l Andjasmaja, SH
                                        @break
                                    @case(8)
                                        Drs. Muchson Surachman
                                        @break
                                    @case(9)
                                        Drs. Burhanuddin
                                        @break
                                    @case(10)
                                        Drs. Himathul Anwar
                                        @break
                                    @case(11)
                                        H.Amry, SH
                                        @break
                                    @case(12)
                                        Dr. H. Abdul Rivai, M. Kes
                                        @break
                                    @case(13)
                                        H. Amry, SH
                                        @break
                                    @case(14)
                                        Drs. H. Muchsis Malik
                                        @break
                                    @case(15)
                                        Drs. Kafrawi Bakhtiar
                                        @break
                                    @case(16)
                                        H. Abdul Gafar. SE. MM
                                        @break
                                    @case(17)
                                        Jumaidi, S.Pd, M.Pd
                                        @break
                                    @case(18)
                                        Arry Yuswandi, S.K.M, M.K.M
                                        @break
                                    @default
                                        Drs. Syaifullah, MM
                                @endswitch
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">
                                @switch($i)
                                    @case(1)
                                        Pejabat Sosial
                                        @break
                                    @case(2)
                                        Pejabat Sosial
                                        @break
                                    @case(3)
                                        Jawatan Provinsi Sumatera Barat
                                        @break
                                    @case(4)
                                        Inspeksi Sosial Sumatera Barat
                                        @break
                                    @case(5)
                                        Isori / Jasos / Kanwil Depsos Sumbar
                                        @break
                                    @case(6)
                                        Kanwil Depsos
                                        @break
                                    @case(7)
                                        Kanwil Depsos
                                        @break
                                    @case(8)
                                        Kanwil Depsos
                                        @break
                                    @case(9)
                                        Kanwil Depsos
                                        @break
                                    @case(10)
                                        Kanwil Depsos
                                        @break
                                    @case(11)
                                        Kanwil Depsos
                                        @break
                                    @case(12)
                                        Dinas Kesehatan dan Kesejahteraan Sosial
                                        @break
                                    @case(13)
                                        Dinas Sosial
                                        @break
                                    @case(14)
                                        Dinas Sosial
                                        @break
                                    @case(15)
                                        Dinas Sosial
                                        @break
                                    @case(16)
                                        Dinas Sosial
                                        @break
                                    @case(17)
                                        Dinas Sosial
                                        @break
                                    @case(18)
                                        Dinas Sosial
                                        @break
                                    @default
                                        Dinas Sosial
                                @endswitch
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes fade-in {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    @keyframes slide-up {
        from {
            transform: translateY(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    
    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }
    
    html {
        scroll-behavior: smooth;
    }

    /* Table styles */
    tbody tr:last-child td:first-child {
        border-bottom-left-radius: 0.5rem;
    }
    
    tbody tr:last-child td:last-child {
        border-bottom-right-radius: 0.5rem;
    }
    
    thead tr:first-child th:first-child {
        border-top-left-radius: 0.5rem;
    }
    
    thead tr:first-child th:last-child {
        border-top-right-radius: 0.5rem;
    }
</style>

@endsection