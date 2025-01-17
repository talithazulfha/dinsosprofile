@extends('layouts.main')
@section('title', 'Foto')
@section('content')

<x-header>Foto</x-header>

<div class="container max-w-6xl mx-auto px-4 py-8">



    <!-- Document Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
        @for ($i = 1; $i <= 9; $i++)
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 group">
            <div class="p-4">
                <div class="relative overflow-hidden rounded-lg mb-4">
                    <img src="{{ asset('images/sample.jpg') }}" 
                         alt="Flow Diagram" 
                         class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-end p-4">
                        <button onclick="openImageModal('{{ asset('images/sample.jpg') }}', 'Foto')" 
                        class="bg-white/90 p-2 rounded-full transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                            <span class="text-xl">🔍</span>
                        </button>
                    </div>
                </div>
    
                <div class="flex items-center text-sm text-gray-500 mb-2">
                    <span class="inline-block mr-2">📅</span>
                    03 Januari 2024
                    <span class="mx-2">•</span>
                    <span class="inline-block mr-2">👁️</span>
                    856 views
                </div>
    
                <h3 class="text-lg font-semibold text-gray-900 group-hover:text-[#0E0C43] transition-colors duration-300 mb-4">
                    Alur Pengaduan Pelayanan Publik Dinas Sosial Provinsi Sumatera Barat
                </h3>
    
                <a href="" 
                   class="inline-block w-full bg-[#23216a] text-white px-6 py-3 rounded-lg text-center 
                          transition-all duration-300 hover:bg-[#0E0C43] hover:shadow-xl hover:-translate-y-1 
                          relative overflow-hidden group">
                    <span class="relative z-10">Baca Selengkapnya</span>
                    <div class="absolute inset-0 w-0 bg-[#0E0C43] transition-all duration-300 ease-out group-hover:w-full"></div>
                </a>
            </div>
        </div>
        @endfor
    </div>

    <div id="imageModal" 
     class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-sm flex items-center justify-center p-4"
     onclick="closeImageModal()">
    <div class="relative max-w-4xl w-full" onclick="event.stopPropagation()">
        <div class="relative">
            <img id="modalImage" src="" alt="" class="w-full rounded-t-2xl max-h-[80vh] object-contain">
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 to-transparent p-8">
                <p id="modalCaption" class="text-white text-xl font-medium text-center"></p>
            </div>
        </div>
        <button onclick="closeImageModal()" 
                class="absolute -top-4 -right-4 bg-white/90 p-2 rounded-full hover:bg-white transition-colors">
            <span class="text-xl">✕</span>
        </button>
    </div>
</div>

<x-pagination></x-pagination>

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
    
    /* Stagger animation for grid items */
    .grid > div:nth-child(1) { animation: slide-up 0.8s ease-out 0.1s backwards; }
    .grid > div:nth-child(2) { animation: slide-up 0.8s ease-out 0.2s backwards; }
    .grid > div:nth-child(3) { animation: slide-up 0.8s ease-out 0.3s backwards; }
    .grid > div:nth-child(4) { animation: slide-up 0.8s ease-out 0.4s backwards; }
    .grid > div:nth-child(5) { animation: slide-up 0.8s ease-out 0.5s backwards; }
    .grid > div:nth-child(6) { animation: slide-up 0.8s ease-out 0.6s backwards; }
    .grid > div:nth-child(7) { animation: slide-up 0.8s ease-out 0.7s backwards; }
    .grid > div:nth-child(8) { animation: slide-up 0.8s ease-out 0.8s backwards; }
    .grid > div:nth-child(9) { animation: slide-up 0.8s ease-out 0.9s backwards; }
    
    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }
    
    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
    </style>

<script>
    function openImageModal(imageSrc, caption) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');
        
        modalImage.src = imageSrc;
        modalImage.alt = caption;
        modalCaption.textContent = caption;
        
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
    }
    
    function closeImageModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
        document.body.style.overflow = ''; // Restore scrolling
    }
    
    // Close modal when pressing Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeImageModal();
        }
    });
    </script>

@endsection