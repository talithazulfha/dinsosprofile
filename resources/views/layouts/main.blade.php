<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dinas Sosial Sumatera Barat')</title>
    <!-- Tambahkan Tailwind CSS -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- Tambahkan Custom CSS jika ada -->
    <style>
        .navbar-scroll {
            transform: translateY(-1rem);
            transition: all 0.3s ease-in-out;
        }
        
        .navbar-scroll.scrolled {
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Include Header -->
    @include('partials.navbar')

    <!-- Main Content -->
    <div class="pt-24"> <!-- Tambahkan padding agar konten tidak tertutup navbar -->
        @yield('content')
    </div>

    <!-- Include Footer -->
    @include('partials.footer')

    <!-- Tambahkan Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar-scroll');
            let lastScroll = 0;
            
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                
                // Add scrolled class when page is scrolled
                if (currentScroll > 0) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
                
                lastScroll = currentScroll;
            });
        });
    </script>
</body>
</html>
