        <!-- Search Container -->
        <div class="max-w-4xl mx-auto px-4 w-full">
            <div class="bg-white/30  border-white rounded-lg p-4 sm:p-5 shadow-md">
            <div class="flex flex-col sm:flex-row gap-3">
                <!-- Search Input -->
                <div class="relative flex-1 group">
                    <input type="text" 
                           placeholder="Search" 
                           class="w-full px-4 py-3 pl-12 rounded-lg bg-transparent border-2 border-white/30 
                                     text-white placeholder-white/70
                                     focus:border-[#0E0C43] focus:ring-1 
                                     focus:ring-[#0E0C43] outline-none 
                                     transition-all duration-300
                                     hover:border-[#0E0C43]">
                    <svg class="w-6 h-6 text-white absolute left-3 top-1/2 transform -translate-y-1/2 
                             transition-transform duration-300 group-hover:scale-110 group-hover:text-[#0E0C43]" 
                        fill="none" 
                        stroke="currentColor" 
                        viewBox="0 0 24 24">
                       <path stroke-linecap="round" 
                             stroke-linejoin="round" 
                             stroke-width="2" 
                             d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                   </svg>
                </div>

                <!-- Search Button -->
                <button type="submit" 
                class="px-8 py-3 bg-white/30 text-white 
                       font-semibold rounded-lg transition-all duration-300
                       hover:bg-[#0E0C43] hover:border-[#0E0C43] hover:translate-y-[-3px]
                       focus:outline-none focus:ring-2 focus:ring-[#0E0C43]
                       sm:w-auto w-full">
            Search
        </button>
            </div>
            </div>
        </div>