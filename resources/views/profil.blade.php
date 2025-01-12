@extends('layouts.main')
@section('title', 'Profil')
@section('content')

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-navy-900 mb-8 text-center">Tentang DINSOS</h1>
        
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/dinsos-building.jpg') }}" alt="Kantor Dinas Sosial" 
                     class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="md:w-1/2 space-y-4">
                <p class="text-gray-600 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor 
                    congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus 
                    malesuada libero, sit amet commodo magna eros quis urna.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque 
                    habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-navy-900 mb-8 text-center">Profil DINSOS</h2>
        
        <div class="grid gap-4 max-w-3xl mx-auto">
            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center" 
                        onclick="toggleSection('visi-misi')">
                    <span class="font-medium text-gray-800">Visi dan Misi Pemerintahan Daerah Provinsi Sumatera Barat</span>
                    <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="visi-misi" class="hidden px-6 py-4 border-t">
                    {{-- Content here --}}
                </div>
            </div>
            
            {{-- Repeat similar structure for other sections --}}
            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center" 
                        onclick="toggleSection('tugas-fungsi')">
                    <span class="font-medium text-gray-800">Tugas dan Fungsi</span>
                    <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="tugas-fungsi" class="hidden px-6 py-4 border-t">
                    {{-- Content here --}}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-navy-900 mb-12 text-center">Jam Pelayanan</h2>
        
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="text-center p-6 bg-gray-50 rounded-lg">
                <div class="text-orange-500 font-medium mb-4">HARI SENIN - KAMIS</div>
                <div class="text-2xl font-bold text-navy-900">08.00 - 15.30 WIB</div>
            </div>
            <div class="text-center p-6 bg-gray-50 rounded-lg">
                <div class="text-orange-500 font-medium mb-4">HARI SENIN - KAMIS</div>
                <div class="text-2xl font-bold text-navy-900">08.00 - 15.30 WIB</div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleSection(id) {
    const section = document.getElementById(id);
    const button = section.previousElementSibling;
    const icon = button.querySelector('svg');
    
    if (section.classList.contains('hidden')) {
        section.classList.remove('hidden');
        icon.classList.add('rotate-180');
    } else {
        section.classList.add('hidden');
        icon.classList.remove('rotate-180');
    }
}
</script>

@endsection