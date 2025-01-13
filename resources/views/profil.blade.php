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
        
        <div class="grid gap-6 max-w-5xl mx-auto">
            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center" 
                        onclick="toggleSection('visi-misi')">
                    <span class="font-medium text-gray-800">Visi dan Misi Pemerintahan Daerah Provinsi Sumatera Barat</span>
                    <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="visi-misi" class="hidden px-6 py-4 border-t">
                    <div class="p-4 ">
                        <div class="space-y-6">
                            <div class="text-center">
                                <h4 class="font-bold text-2xl mb-2">Visi</h4>
                                <p class="text-gray-600">"Terwujudnya Sumatera Barat Madani yang Unggul dan Berkelanjutan"</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-2xl mb-2 text-center">Misi</h4>
                                <p class="text-gray-600">Misi untuk Dinas Sosial adalah Misi-1 dan Misi-2 dari 7 Misi</p>
                                <ol class="list-decimal pl-5 space-y-2 text-gray-600">
                                    <li>Meningkatkan kualitas sumber daya manusia yang sehat, berpengetahuan, terampil dan berdaya saing.</li>
                                    <li>Meningkatkan tata kehidupan sosial kemasyarakatan berdasarkan Falsafah Adaiak Basandi Syara', Syara' Basandi Kitabullah.</li>
                                    <li>Meningkatkan nilai tambah dan produktifitas pertanian, perkebunan, perternakan dan perikanan.</li>
                                    <li>Meningkatkan usaha perdagangan dan industri kecil/menengah serta ekonomi berbasis digital.</li>
                                    <li>Meningkatkan ekonomi kreatif dan daya saing kepariwisataan.</li>
                                    <li>Meningkatkan pembangunan infrastruktur yang berkeadilan dan berkelanjutan.</li>
                                    <li>Mewujudkan tata kelola pemerintah dan pelayanan publik yang bersih, akuntabel serta berkualitas.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
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
                    <div class="p-4 ">
                        <div class="space-y-6">
                            <div>
                                <h4 class="font-bold text-2xl mb-2 text-center">Peraturan Gubernur Sumatera Barat Nomor 48 Tahun 2017 Tentang Uraian Tugas Pokok dan Fungsi Dinas Sosial Provinsi Sumater Barat</h4>
                                <ol class="list-none pl-5 space-y-2 text-gray-600">
                                    <li>(1) Dinas mempunyai tugas pokok melaksanakan penyusunan dan pelaksanaan kebijakan daerah dibidang sosial serta pembantuan.</li>
                                    <li>(2) Untuk menyelenggarakan tugas pokok sebagaimana dimaksud pada ayat (1), Dinas mempunyai fungsi :</li>
                                    <ol class="list-[lower-alpha] pl-10 space-y-2 text-gray-600">
                                        <li>perumusan kebijakan teknis di bidang Sosial;</li>
                                        <li>penyelenggaraan urusan pemerintahan dan pelayanan umum di bidang Sosial;</li>
                                        <li>pembinaan dan fasilitasi bidang Sosial, lingkup provinsi dan kabupaten/kota;</li>
                                        <li>pelaksanaan kesekretariatan dinas;</li>
                                        <li>pelaksanaan tugas di bidang perlindungan dan jaminan sosial, rehabilitasi sosial pemberdayaan sosial, dan penanganan fakir miskin;</li>
                                        <li>pemantauan, evaluasi dan pelaporan di bidang sosial; dan</li>
                                        <li>pelaksanaan tugas kedinasan lain yang diberikan oleh pimpinan.</li>
                                    </ol>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center" 
                        onclick="toggleSection('struktur')">
                    <span class="font-medium text-gray-800">Struktur Organisasi</span>
                    <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="struktur" class="hidden px-6 py-4 border-t">
                    <div class="p-4 ">
                        <div class="space-y-6">
                            <div>
                                <h4 class="font-bold text-2xl mb-2 text-center">Struktur Organisasi Dinas Sosial Provinsi Sumatera Barat</h4>
                                <img src="{{ asset('images/struktur.png') }}" alt="Struktur" class="w-full h-auto mx-auto mt-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center" onclick="toggleSection('sejarah')">
                    <span class="font-medium text-gray-800">Sejarah Singkat</span>
                    <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                
                <div id="sejarah" class="hidden px-6 py-4 border-t">
                    <p class="text-gray-600 leading-relaxed">
                        {{ $shortenedSejarah }}
                    </p>
                    <a href="/detailSejarah" class="text-blue-600 hover:underline">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center" 
                        onclick="toggleSection('pegawai')">
                    <span class="font-medium text-gray-800">Daftar Pegawai Dinas Sosial Sumatera Barat</span>
                    <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="pegawai" class="hidden px-6 py-4 border-t">
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