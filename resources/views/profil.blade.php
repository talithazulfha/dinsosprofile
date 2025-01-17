@extends('layouts.main')
@section('title', 'Profil')
@section('content')


<div class="heading bg-cover bg-center py-20 md:py-32 flex items-center justify-center relative">
    <!-- Background with overlay -->
    <div class="absolute inset-0 bg-cover bg-center transform scale-105 transition-transform duration-1000" 
         style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/sample.jpg')">
    </div>

    <!-- Content Container -->
    <div class="flex flex-col items-center justify-center relative z-10 w-full mt-8 px-4 sm:px-8 md:px-16">
        <!-- Title -->
        <h1 class="text-3xl sm:text-4xl md:text-6xl text-white uppercase font-bold tracking-wider fade-in-scale mb-6 sm:mb-8 text-center">
            <span class="flex items-center">
                <span class="w-16 sm:w-10 md:w-20 h-1 bg-white mr-4"></span>
                Profil
                <span class="w-16 sm:w-10 md:w-20 h-1 bg-white ml-4"></span>
            </span>
        </h1>

    </div>
</div>


<section class="bg-white">
    <div class="container mx-auto px-4">
        <div class="flex items-center mb-8">
            <a href="/" class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>


<section class="py-16 bg-white">
    <div class="container mx-auto px-4 mt-16">
        <h1 class="text-3xl font-bold text-navy-900 mb-8 text-center">Tentang DINSOS</h1>
        
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/home.png') }}" alt="Kantor Dinas Sosial" 
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


<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-navy-900 mb-8 text-center">Profil DINSOS</h2>
        
        <div class="grid gap-6 max-w-5xl mx-auto">
            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center" 
                        onclick="toggleSection('visi-misi')">
                    <span class="font-medium text-gray-800">Visi dan Misi Pemerintahan Daerah Provinsi Sumatera Barat</span>
                    <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="visi-misi" class="px-6 py-4 border-t transition-all duration-300 ease-in-out">
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

            <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center" 
                        onclick="toggleSection('tugas-fungsi')">
                    <span class="font-medium text-gray-800">Tugas dan Fungsi</span>
                    <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="tugas-fungsi" class="px-6 py-4 border-t transition-all duration-300 ease-in-out">
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
                    <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="struktur" class="px-6 py-4 border-t transition-all duration-300 ease-in-out">
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
                    <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                
                <div id="sejarah" class="px-6 py-4 border-t transition-all duration-300 ease-in-out">
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
                    <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="pegawai" class="hidden px-6 py-4 border-t">
                    {{-- Content here --}}
                </div>

        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-navy-900 mb-4">Jambore Nasional Pramuka Anak</h1>
            <div class="text-gray-600 mb-8">
                <span>03 januari 2024</span>
                <span class="mx-2">·</span>
                <span>Oleh: Dinsos</span>
                <span class="mx-2">·</span>
                <span>90 kali dibaca</span>
            </div>

            <div class="mb-8">
                <img src="{{ asset('images/jambore-banner.jpg') }}" alt="Jambore Nasional Pramuka Anak" 
                     class="w-full h-auto rounded-lg shadow-lg">
            </div>

            <div class="space-y-6 bg-white rounded-lg shadow-sm p-6">
                <div>
                    <div class="mb-4">
                        <span class="font-medium">Tanggal mulai Kegiatan : </span>
                        <span>Sabtu, 22 Juli 2023</span>
                    </div>
                    <div class="mb-4">
                        <span class="font-medium">Tanggal selesai Kegiatan : </span>
                        <span>Sabtu, 22 Juli 2023</span>
                    </div>
                    <div class="mb-4">
                        <span class="font-medium">Lokasi Kegiatan : </span>
                        <span>Bukittinggi</span>
                    </div>
                </div>
            </div>

            <div class="mt-6 text-gray-600">
                <p>Dinas Sosial Provinsi Sumatera Barat, Akan melaksanakan Event Nasional yaitu Jambore Nasional Pramuka Anak Di Bukittinggi yang akan dilaksanakan pada tanggal 22 - 25 Juli 2023</p>

            </div>

        </div>
    </div>
</section>

<!-- resources/views/components/service-hours.blade.php -->
<section class="py-16 bg-gradient-to-br from-white via-gray-50 to-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-navy-900 mb-12 text-center">Jam Pelayanan</h2>
        
        <div class="grid lg:grid-cols-2 gap-6 max-w-7xl mx-auto">
            <!-- Left Column -->
            <div class="group bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 border border-gray-100 hover:bg-orange-50/30">
                <div class="flex flex-col sm:flex-row items-start gap-4">
                    <div class="p-3 bg-orange-100 rounded-lg group-hover:bg-orange-200 transition-colors duration-300 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <div class="flex-1 w-full">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">LAYANAN KONSULTASI, INFORMASI DAN PENGADUAN</h3>
                        <div class="grid sm:grid-cols-2 gap-3">
                            <div class="p-3 bg-orange-50 rounded-lg border border-orange-100 group-hover:bg-orange-100/50 transition-colors duration-300">
                                <p class="text-gray-700">
                                    <span class="font-medium text-orange-700 block mb-1">SENIN-KAMIS</span>
                                    07.30 - 16.00 WIB
                                </p>
                            </div>
                            <div class="p-3 bg-orange-50 rounded-lg border border-orange-100 group-hover:bg-orange-100/50 transition-colors duration-300">
                                <p class="text-gray-700">
                                    <span class="font-medium text-orange-700 block mb-1">JUM'AT</span>
                                    07.30 - 16.30 WIB
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="grid gap-6">
                <!-- Layanan Penanganan OT Card -->
                <div class="group bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 border border-gray-100 hover:bg-blue-50/30">
                    <div class="flex flex-col sm:flex-row items-start gap-4">
                        <div class="p-3 bg-blue-100 rounded-lg group-hover:bg-blue-200 transition-colors duration-300 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">LAYANAN PENANGANAN ORANG TERLANTAR (OT)</h3>
                            <div class="inline-flex items-center space-x-2 bg-blue-50 px-3 py-1 rounded-full">
                                <span class="animate-pulse h-2 w-2 bg-blue-500 rounded-full"></span>
                                <span class="text-blue-700 font-medium">SETIAP HARI 24 JAM</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Layanan Penyaluran Bantuan Card -->
                <div class="group bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 border border-gray-100 hover:bg-green-50/30">
                    <div class="flex flex-col sm:flex-row items-start gap-4">
                        <div class="p-3 bg-green-100 rounded-lg group-hover:bg-green-200 transition-colors duration-300 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">LAYANAN PENYALURAN BANTUAN LOGISTIK</h3>
                            <div class="inline-flex items-center space-x-2 bg-green-50 px-3 py-1 rounded-full">
                                <span class="animate-pulse h-2 w-2 bg-green-500 rounded-full"></span>
                                <span class="text-green-700 font-medium">SETIAP HARI 24 JAM</span>
                            </div>
                        </div>
                    </div>
                </div>

<section class="bg-navy-900 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">Hubungi Kami</h3>
                <div class="space-y-2">
                    <p>Alamat : Jl. Khatib Sulaiman No. 5 Padang</p>
                    <p>Telp : (0751) 7051465</p>
                    <p>Fax : (0751) 7057284</p>
                    <p>Email : dinsos@sumbarprov.go.id</p>
                </div>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-4">Tentang Kami</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-300">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-gray-300">Kontak</a></li>
                    <li><a href="#" class="hover:text-gray-300">Kebijakan</a></li>
                    <li><a href="#" class="hover:text-gray-300">Syarat & ketentuan</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-4">Link Terkait</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-300">Sumbarprov</a></li>
                    <li><a href="#" class="hover:text-gray-300">Simaya Sumbar</a></li>
                    <li><a href="#" class="hover:text-gray-300">Portal E-Government</a></li>
                    <li><a href="#" class="hover:text-gray-300">Kominfo</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>



<script>
    function toggleSection(id) {
        const allSections = document.querySelectorAll('[id^="visi-misi"], [id^="tugas-fungsi"], [id^="struktur"], [id^="sejarah"], [id^="pegawai"]');
    const section = document.getElementById(id);
    const button = section.previousElementSibling;
    const icon = button.querySelector('svg');

    allSections.forEach(sec => {
            if (sec.id !== id) {
            sec.style.display = 'none';
            const otherButton = sec.previousElementSibling;
            const otherIcon = otherButton.querySelector('svg');
            otherIcon.classList.remove('rotate-180');
            }
        });
    
        if (section.style.display === 'none' || section.style.display === '') {
        section.style.display = 'block';
        icon.classList.add('rotate-180');
    } else {
        section.style.display = 'none';
        icon.classList.remove('rotate-180');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Initially hide all sections
    const allSections = document.querySelectorAll('[id^="visi-misi"], [id^="tugas-fungsi"], [id^="struktur"], [id^="sejarah"], [id^="pegawai"]');
    allSections.forEach(section => {
        section.style.display = 'none';
    });
});
</script>

<footer class="bg-navy-900 text-white py-4 border-t border-gray-700">
    <div class="container mx-auto px-4 text-center">
        <p>©2025 Dinas Sosial Provinsi Sumatera Barat | by Diskominfo Sumbar</p>
    </div>
</footer>


@endsection