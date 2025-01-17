@extends('layouts.main')
@section('title', 'Beranda')
@section('content')
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<section class="relative h-[60vh] sm:h-[60vh] md:h-[70vh] lg:h-[600px] overflow-hidden"> 
    <!-- Carousel Slides -->
    <div class="relative h-full" style="user-select: none;" oncontextmenu="return false;">
        {{-- First Slide --}}
        <div class="carousel-slide absolute inset-0 transition-opacity duration-700">
            <img src="{{ asset('images/sample2.jpg') }}" alt="Hero 1" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-white text-center max-w-4xl px-4 animate-fade-up">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-2 sm:mb-4 leading-tight">Dinas Sosial Provinsi Sumatera Barat</h1>
                    <p class="text-xl sm:text-lg md:text-xl text-gray-200">Slide 1 Description</p>
                </div>
            </div>
        </div>

        {{-- Second Slide --}}
        <div class="carousel-slide absolute inset-0 transition-opacity duration-700 hidden">
            <img src="{{ asset('images/sample3.jpg') }}" alt="Hero 2" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-white text-center max-w-4xl px-4 animate-fade-up">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-2 sm:mb-4">Pelayanan Sosial</h1>
                    <p class="text-xl sm:text-lg md:text-xl text-gray-200">Slide 2 Description</p>
                </div>
            </div>
        </div>

        {{-- Navigation Buttons --}}
        <button class="absolute left-2 sm:left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 p-1 sm:p-2 rounded-full hover:bg-opacity-75 transition-all" onclick="previousSlide()">
            <svg class="w-4 h-4 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        <button class="absolute right-2 sm:right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 p-1 sm:p-2 rounded-full hover:bg-opacity-75 transition-all" onclick="nextSlide()">
            <svg class="w-4 h-4 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>

        {{-- Carousel Indicators --}}
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <button class="carousel-indicator active" onclick="showSlide(0)"></button>
            <button class="carousel-indicator" onclick="showSlide(1)"></button>
        </div>
    </div>
</section>
    
<!-- Kata Sambutan -->
<section class="py-12 md:py-20 bg-gradient-to-b from-gray-50 to-white ">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 p-6 md:p-10">
            <h2 class="text-2xl md:text-3xl font-bold text-[#0E0C43] mb-8 after:content-[''] after:block after:w-20 after:h-1 after:bg-[#FF8000] after:mt-4">
                Kata Sambutan
            </h2>
            <div class="flex flex-col md:flex-row gap-8 md:gap-12 items-start">
                <div class="w-full md:w-1/4 max-w-[280px] mx-auto md:mx-0">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-b from-[#0E0C43]/0 to-[#0E0C43] opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                        <img src="{{ asset('images/logo.png') }}" alt="Kepala Dinas" 
                        class="w-full rounded-xl transform transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="mt-6 text-center">
                        <p class="font-semibold text-[#0E0C43]">H. ARDA SAPAR, SE.MM</p>
                    </div>
                </div>
                <div class="w-full md:w-3/4">
                    <p class="text-gray-700 leading-relaxed text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at vestibulum urna. 
                        Curabitur consequat, nisi vitae aliquam gravida, nibh sem ultrices nunc, eu molestie 
                        tortor ipsum sed ante...
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
    
<!-- Berita Section with Smooth Scroll -->
<section class="py-12 md:py-20">
    <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-2xl md:text-3xl font-bold text-[#0E0C43] mb-8 after:content-[''] after:block after:w-20 after:h-1 after:bg-[#FF8000] after:mt-4">
            Berita Terkini
        </h2>
        <div class="relative group">
            <div class="overflow-x-auto scrollbar-hide">
                <div class="flex space-x-6 pb-4">
                    @for ($i = 1; $i <= 8; $i++)
                    <div class="flex-none w-[280px] md:w-[300px] transform transition-all duration-300 hover:-translate-y-2">
                        <div class="bg-white rounded-xl shadow-sm hover:shadow-md overflow-hidden">
                            <div class="relative overflow-hidden aspect-w-16 aspect-h-9">
                                <img src="{{ asset('images/berita-' . $i . '.jpg') }}" alt="Berita {{ $i }}" 
                                     class="w-full h-full object-cover transform transition-transform duration-500 hover:scale-105">
                            </div>
                            <div class="p-5">
                                <div class="flex items-center text-sm text-gray-500 mb-3">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    {{ date('d M Y') }}
                                </div>
                                <h3 class="font-semibold text-lg text-[#0E0C43] mb-3 line-clamp-2">
                                    Judul Berita {{ $i }}
                                </h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                                </p>
                                <a href="#" class="inline-flex items-center text-[#0E0C43] text-sm font-medium group">
                                    Baca selengkapnya 
                                    <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1 " 
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
    
<!-- Layanan Section -->
<section class="py-12 md:py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-2xl md:text-3xl font-bold text-[#0E0C43] mb-8 after:content-[''] after:block after:w-20 after:h-1 after:bg-blue-600 after:mt-4">
            Layanan Kami
            
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @for ($i = 1; $i <= 3; $i++)
            <div class="bg-white rounded-xl shadow-sm p-6 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                <div class="mb-4">
                    <svg class="w-12 h-12 text-[#0E0C43]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                <h3 class="font-semibold text-xl text-gray-900 mb-3">Layanan {{ $i }}</h3>
                <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <a href="#" class="inline-flex items-center px-4 py-2 bg-[#0E0C43] text-white rounded-lg transition-colors text-sm font-medium group">
                    Selengkapnya
                    <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1" 
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            @endfor
        </div>
    </div>
</section>
    
        <!-- Lokasi Section -->
        <section class="py-8 sm:py-12 md:py-16 ">
            <div class="container mx-auto px-4 max-w-6xl">
                <h2 class="text-2xl md:text-3xl font-bold text-[#0E0C43] mb-8 after:content-[''] after:block after:w-20 after:h-1 after:bg-blue-600 after:mt-4">
                    Lokasi
                </h2>
                <div class="bg-white rounded-lg shadow p-2 sm:p-4">
                    <div class="w-full" style="aspect-ratio: 16 / 5;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3172098140285!2d100.3581196!3d-0.9247136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8d75e136e61%3A0xedc7d0fa6b6017af!2sSocial+Agency+of+West+Sumatra+Province!5e0!3m2!1sen!2sid!4v1684921565049!5m2!1sen!2sid"
                            class="w-full h-full"
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        <style>
            /* Hide scrollbar but keep functionality */
            .scrollbar-hide {
                -ms-overflow-style: none;  /* IE and Edge */
                scrollbar-width: none;     /* Firefox */
            }
            
            .scrollbar-hide::-webkit-scrollbar {
                display: none;  /* Chrome, Safari and Opera */
            }
            
            /* Smooth scroll behavior */
            .news-scroll {
                scroll-behavior: smooth;
            }
            
            /* Custom animations */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .animate-fade-up {
                animation: fadeInUp 0.6s ease-out;
            }
            
            /* Add these classes to your Tailwind config if not already present */
            @layer utilities {
                .aspect-w-16 {
                    position: relative;
                    padding-bottom: 56.25%;
                }
                .aspect-h-9 {
                    position: relative;
                }
                .aspect-w-16 > *, .aspect-h-9 > * {
                    position: absolute;
                    height: 100%;
                    width: 100%;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }
            }
            </style>

        <script>
            document.addEventListener('keydown', function (e) {
                if ((e.ctrlKey || e.metaKey) && e.key === 'c') {
                    e.preventDefault();
                    alert('Copying content is disabled!');
                }
            });

            let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-slide');
const indicators = document.querySelectorAll('.carousel-indicator');
const autoPlayDelay = 5000; // 5 seconds
let autoPlayTimer;

function showSlide(index) {
    slides.forEach((slide, i) => {
        if (i === index) {
            slide.classList.remove('hidden');
            slide.style.opacity = '1';
        } else {
            slide.style.opacity = '0';
            setTimeout(() => {
                slide.classList.add('hidden');
            }, 500);
        }
    });
    
    currentSlide = index;
    updateIndicators();
    resetAutoPlay();
}

function nextSlide() {
    const next = (currentSlide + 1) % slides.length;
    showSlide(next);
}

function previousSlide() {
    const prev = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(prev);
}

function updateIndicators() {
    indicators.forEach((indicator, i) => {
        if (i === currentSlide) {
            indicator.classList.add('active');
        } else {
            indicator.classList.remove('active');
        }
    });
}

function resetAutoPlay() {
    clearInterval(autoPlayTimer);
    autoPlayTimer = setInterval(nextSlide, autoPlayDelay);
}

// Initialize autoplay
resetAutoPlay();

// Add intersection observer for animations
document.addEventListener('DOMContentLoaded', function() {
    // Get the news container
    const newsContainer = document.querySelector('.news-scroll-container');
    let scrollInterval;
    let isMouseOver = false;
    let startX;
    let scrollLeft;
    let isMouseDown = false;

    // Auto scroll function
    function startAutoScroll() {
        scrollInterval = setInterval(() => {
            if (!isMouseOver && !isMouseDown) {
                newsContainer.scrollLeft += 1; // Adjust speed by changing this number
                
                // Reset to start when reached end
                if (newsContainer.scrollLeft >= (newsContainer.scrollWidth - newsContainer.clientWidth)) {
                    newsContainer.scrollLeft = 0;
                }
            }
        }, 30); // Adjust interval for smoother/faster scroll
    }

    // Mouse enter - stop auto scroll
    newsContainer.addEventListener('mouseenter', () => {
        isMouseOver = true;
    });

    // Mouse leave - resume auto scroll
    newsContainer.addEventListener('mouseleave', () => {
        isMouseOver = false;
    });

    // Mouse down - start drag
    newsContainer.addEventListener('mousedown', (e) => {
        isMouseDown = true;
        startX = e.pageX - newsContainer.offsetLeft;
        scrollLeft = newsContainer.scrollLeft;
    });

    // Mouse up - end drag
    newsContainer.addEventListener('mouseup', () => {
        isMouseDown = false;
    });

    // Mouse move - perform drag
    newsContainer.addEventListener('mousemove', (e) => {
        if (!isMouseDown) return;
        e.preventDefault();
        const x = e.pageX - newsContainer.offsetLeft;
        const walk = (x - startX) * 2; // Adjust scroll speed
        newsContainer.scrollLeft = scrollLeft - walk;
    });

    // Start auto scroll initially
    startAutoScroll();
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Add hover effect for service cards
const serviceCards = document.querySelectorAll('.service-card');
serviceCards.forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.querySelector('.service-icon').classList.add('rotate-12');
    });
    
    card.addEventListener('mouseleave', function() {
        this.querySelector('.service-icon').classList.remove('rotate-12');
    });
});

// Add parallax effect to hero section
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        heroSection.style.transform = `translateY(${scrolled * 0.4}px)`;
    }
});

        </script>
        
        <script src="{{ asset('js/carousel.js') }}"></script>
        @endsection