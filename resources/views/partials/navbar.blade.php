<nav id="navbar" class="fixed w-full bg-white bg-opacity-50 backdrop-blur-sm shadow-lg my-6 z-50 transition-all duration-500 ease-in-out py-2"  >
    <div class="max-w-screen-xl mx-auto flex justify-between items-center px-4 md:px-6">
       <a href="/">
        <div class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 mr-4">
            <div>
            <span class="block font-bold text-[25px] text-[#0E0C43] leading-none" style="font-family: 'Inter';">DINAS SOSIAL</span>
            <span class="block text-[16px] text-[#FF8000]" style="font-family: 'Inter';">PROVINSI SUMATERA BARAT</span>
            </div>
        </div>
    </a>
        <div class="hidden md:flex space-x-6 gap-5 font-bold">
            <a href="/" class="relative text-gray-700 hover:text-[#0E0C43] transition-colors duration-150 ease-in-out group">
                Beranda
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
            </a>
            <a href="/profil" class="relative text-gray-700 hover:text-[#0E0C43] transition-colors duration-150 ease-in-out group">
                Profil
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
            </a>
            <a href="/berita" class="relative text-gray-700 hover:text-[#0E0C43] transition-colors duration-150 ease-in-out group">
                Berita
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
            </a>
            <div class="relative group">
                <a href="#" class="relative text-gray-700 hover:text-[#0E0C43] transition-colors duration-150 ease-in-out group">
                    Galeri
                    <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                </a>
                <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md py-2">
                    <a href="/foto" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Foto</a>
                    <a href="/video" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Video</a>
                </div>
            </div>
            <a href="https://www.lapor.go.id/" target="_blank" class="relative text-gray-700 hover:text-[#0E0C43] transition-colors duration-150 ease-in-out group">
                Lapor
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
            </a>
            <a href="/kegiatan" class="relative text-gray-700 hover:text-[#0E0C43] transition-colors duration-150 ease-in-out group">
                Kegiatan
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
            </a>
            <a href="/download" class="relative text-gray-700 hover:text-[#0E0C43] transition-colors duration-150 ease-in-out group">
                Download
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
            </a>
            <div class="relative group">
                <a href="#" class="relative text-gray-700 hover:text-[#0E0C43] transition-colors duration-150 ease-in-out group">
                    PPID
                    <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                </a>
                <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md py-2">
                    <a href="{{ route('ppid.profil') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 whitespace-nowrap">Profil PPID</a>
                    <a href="{{ route('ppid.serta-merta') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 whitespace-nowrap">Informasi Serta Merta</a>
                    <a href="{{ route('ppid.setiap-saat') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 whitespace-nowrap">Informasi Tersedia Setiap Saat</a>
                    <a href="{{ route('ppid.berkala') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 whitespace-nowrap">Informasi Berkala</a>
                    <a href="{{ route('ppid.dikecualikan') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 whitespace-nowrap">Informasi Dikecualikan</a>
                    <a href="/permohonanInformasi" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 whitespace-nowrap">Permohonan Informasi</a>
                    <a href="/permohonanKeberatan" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 whitespace-nowrap">Keberatan Permohonan</a>
                    <a href="/maklumatPpid" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 whitespace-nowrap">Maklumat</a>
                </div>
            </div>
        </div>
        
    </div>
</nav>

<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 0) {
            // Saat di-scroll, hapus margin dan ubah opacity
            navbar.classList.remove('my-6');
        } else {
            // Saat kembali ke atas, kembalikan margin dan opacity awal
            navbar.classList.add('my-6');
        }
    });
</script>