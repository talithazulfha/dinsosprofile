<nav id="navbar" class="fixed w-full bg-white bg-opacity-50 backdrop-blur-sm shadow-lg my-6 z-50 transition-all duration-500 ease-in-out py-2"  >
    <div class="max-w-screen-xl mx-auto flex justify-between items-center px-4 md:px-6">
       <a href="/" class="flex items-center">
        <div class="flex justify-between items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 md:h-12">
            <div class="flex flex-col">
            <span class="font-bold text-lg md:text-[25px] text-[#0E0C43] leading-none font-['Inter']">DINAS SOSIAL</span>
            <span class="text-sm md:text-[16px] text-[#FF8000] font-['Inter']">PROVINSI SUMATERA BARAT</span>
            </div>
        </div>
    </a>

    <button id="mobile-menu-button" class="md:hidden flex items-center z-50">
        <svg class="w-6 h-6 text-[#0E0C43] transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>

        <div class="hidden md:flex items-center justify-end space-x-6 py-2 font-bold">
            <a href="/" class="relative text-[#0E0C43] duration-150 ease-in-out group">
                Beranda
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
            </a>
            <a href="/profil" class="relative text-[#0E0C43] duration-150 ease-in-out group">
                Profil
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
            </a>
            <a href="/berita" class="relative text-[#0E0C43] duration-150 ease-in-out group">
                Berita
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
            </a>
            <div class="relative group">
                <a href="#" class="relative text-[#0E0C43] duration-150 ease-in-out group">
                    Galeri
                    <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                </a>
                <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md py-2">
                    <a href="/foto" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Foto</a>
                    <a href="/video" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Video</a>
                </div>
            </div>
            <a href="https://www.lapor.go.id/" target="_blank" class="relative text-[#0E0C43] duration-150 ease-in-out group">
                Lapor
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
            </a>
            <a href="/kegiatan" class="relative text-[#0E0C43] duration-150 ease-in-out group">
                Kegiatan
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
            </a>
            <a href="/download" class="relative text-[#0E0C43] duration-150 ease-in-out group">
                Download
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
            </a>
            <div class="relative group">
                <a href="#" class="relative text-[#0E0C43] duration-150 ease-in-out group">
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
        
        <!-- Mobile Menu - Hidden by default -->
        <div id="mobile-menu" class="hidden fixed inset-0 bg-white bg-opacity-50 backdrop-blur-sm md:hidden">
            <div class="px-4 py-2 space-y-2 bg-white bg-opacity-50 backdrop-blur-sm h-screen pt-20">
                <a href="/" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                    Beranda
                    <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                </a>
                <a href="/profil" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                    Profil
                    <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                </a>
                <a href="/berita" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                    Berita
                    <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                </a>

                <!-- Enhanced Mobile Dropdowns -->
                <div class="mobile-dropdown relative group">
                    <button class="w-full flex justify-between items-center py-2 text-[#0E0C43] hover:text-[#0E0C43] relative">
                        Galeri
                        <svg class="w-4 h-4 transform transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden group-hover:block pl-4 space-y-2 bg-white bg-opacity-0 backdrop-blur-sm">
                        <a href="/foto" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                            Foto
                            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                        <a href="/video" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                            Video
                            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                    </div>
                </div>

                <!-- Other mobile menu items with hover effect -->
                <a href="https://www.lapor.go.id/" target="_blank" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                    Lapor
                    <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                </a>

                <!-- Enhanced PPID Dropdown -->
                <div class="mobile-dropdown relative group">
                    <button class="w-full flex justify-between items-center py-2 text-[#0E0C43] hover:text-[#0E0C43] relative">
                        PPID
                        <svg class="w-4 h-4 transform transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden group-hover:block pl-4 space-y-2 bg-white bg-opacity-0 backdrop-blur-sm">
                        <a href="{{ route('ppid.profil') }}" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                            Profil PPID
                            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                        <a href="{{ route('ppid.serta-merta') }}" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                            Informasi Serta Merta
                            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                        <a href="{{ route('ppid.setiap-saat') }}" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                            Informasi Tersedia Setiap Saat
                            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                        <a href="{{ route('ppid.berkala') }}" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                            Informasi Berkala
                            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                        <a href="{{ route('ppid.dikecualikan') }}" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                            Informasi Dikecualikan
                            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                        <a href="/permohonanInformasi" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                            Permohonan Informasi
                            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                        <a href="/permohonanKeberatan" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                            Keberatan Permohonan
                            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                        <a href="/maklumatPpid" class="block py-2 text-[#0E0C43] hover:text-[#0E0C43] relative group">
                            Maklumat
                            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#0E0C43] transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                    </div>
                </div>

    </div>
</nav>

<style>
    .nav-link {
        @apply relative text-gray-700 hover:text-[#0E0C43] transition-colors duration-150 ease-in-out;
    }
    
    .nav-link::after {
        content: '';
        @apply absolute left-0 bottom-0 w-0 h-0.5 bg-[#0E0C43] transition-all duration-300 ease-in-out;
    }
    
    .nav-link:hover::after {
        @apply w-full;
    }

    .mobile-menu-open {
    overflow: hidden;
}

.menu-icon-active {
    transform: rotate(45deg);
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-100%);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

#mobile-menu.show {
    animation: slideIn 0.3s ease-out forwards;
}
    </style>
    

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

    document.getElementById('mobile-menu-button').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.toggle('hidden');
});

document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuButton = document.getElementById('mobile-menu-button');
    const menuIcon = document.getElementById('menu-icon');
    let isMenuOpen = false;

    // Scroll handler
    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
            navbar.classList.remove('my-6');
        } else {
            navbar.classList.add('my-6');
        }
    });

    // Mobile menu toggle
    menuButton.addEventListener('click', function() {
        isMenuOpen = !isMenuOpen;
        
        if (isMenuOpen) {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('show');
            document.body.classList.add('mobile-menu-open');
            menuIcon.classList.add('menu-icon-active');
        } else {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('show');
            document.body.classList.remove('mobile-menu-open');
            menuIcon.classList.remove('menu-icon-active');
        }
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (isMenuOpen && !mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('show');
            document.body.classList.remove('mobile-menu-open');
            menuIcon.classList.remove('menu-icon-active');
            isMenuOpen = false;
        }
    });
});

</script>