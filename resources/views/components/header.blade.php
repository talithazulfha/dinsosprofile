<div class="heading bg-cover bg-center py-20 md:py-32 flex items-center justify-center relative">
    <!-- Background with overlay -->
    <div class="absolute inset-0 bg-cover bg-center transform scale-105 transition-transform duration-1000 " 
         style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/sample.jpg')">
    </div>

    <!-- Content Container -->
    <div class="flex flex-col items-center justify-center relative z-10 w-full mt-8 px-4 sm:px-8 md:px-16 ">
        <!-- Title -->
        <h1 class="text-3xl sm:text-4xl md:text-6xl text-white uppercase font-bold tracking-wider fade-in-scale mb-6 sm:mb-8 text-center">

                {{ $slot }}
                
        </h1>

<x-search-bar></x-search-bar>
    </div>
</div>
