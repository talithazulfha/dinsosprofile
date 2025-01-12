<nav id="navbar" class="fixed w-full bg-white bg-opacity-50 backdrop-blur-sm shadow-lg my-6 z-50 transition-all duration-500 ease-in-out"  >
    <div class="flex justify-between items-center px-6">
        <div class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 mr-4">
            <div>
            <span class="block font-bold text-[25px] text-[#0E0C43] leading-none" style="font-family: 'Inter';">DINAS SOSIAL</span>
            <span class="block text-[16px] text-[#FF8000]" style="font-family: 'Inter';">PROVINSI SUMATERA BARAT</span>
            </div>
        </div>
        <div class="hidden md:flex space-x-6">
            <a href="/" class="text-gray-700 hover:text-gray-900">Beranda</a>
            <a href="/profil" class="text-gray-700 hover:text-gray-900">Profil</a>
            <a href="/berita" class="text-gray-700 hover:text-gray-900">Berita</a>
            <a href="/galeri" class="text-gray-700 hover:text-gray-900">Galeri</a>
            <a href="https://www.lapor.go.id/" target="blank" class="text-gray-700 hover:text-gray-900">Lapor</a>
            <a href="/kegiatan" class="text-gray-700 hover:text-gray-900">Kegiatan</a>
            <a href="/download" class="text-gray-700 hover:text-gray-900">Download</a>
            <a href="/ppid" class="text-gray-700 hover:text-gray-900">PPID</a>
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