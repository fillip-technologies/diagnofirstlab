<section class=" mt-2relative z-20">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="bg-white rounded-3xl shadow-xl p-4 sm:p-6
                    flex flex-col lg:flex-row items-stretch lg:items-center gap-4">

            <!-- Search Input -->
            <div class="relative flex-1">
                <input type="text"
                    placeholder="Search lab tests, packages, health checkups..."
                    class="w-full h-12 sm:h-14 pl-5 pr-14 rounded-full
                              border border-gray-200
                              focus:outline-none focus:ring-2
                              focus:ring-primaryFrom/30
                              text-sm sm:text-base text-gray-700">

                <!-- Search Icon -->
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute right-5 top-1/2 -translate-y-1/2
                            h-5 w-5 text-gray-400"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1116.65 1.35a7.5 7.5 0 010 15.3z" />
                </svg>
            </div>

            <!-- Lab Tests Button -->
            <button class="flex items-center justify-center gap-2
                           h-12 sm:h-14 px-6 sm:px-8 rounded-full
                           text-white font-semibold text-sm sm:text-base
                           bg-gradient-to-r from-primaryFrom to-primaryTo
                           shadow-lg hover:opacity-90 transition w-full lg:w-auto">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 2v6a6 6 0 0012 0V2M6 14h12v2a6 6 0 01-12 0v-2z" />
                </svg>
                Lab Tests
            </button>

            <!-- Checkup Button -->
            <button class="flex items-center justify-center gap-2
                           h-12 sm:h-14 px-6 sm:px-8 rounded-full
                           text-white font-semibold text-sm sm:text-base
                           bg-gradient-to-r from-secondaryFrom to-secondaryTo
                           shadow-lg hover:opacity-90 transition w-full lg:w-auto">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 7l-8-4-8 4v10l8 4 8-4V7z" />
                </svg>
                Checkup
            </button>
        </div>

        <!-- Offer Line -->
        <p class="mt-4 text-center text-xs sm:text-sm text-gray-600">
            <span class="font-semibold text-primaryFrom">Get 10% OFF</span>
            on first order |
            Use code:
            <span class="font-semibold text-primaryTo">DISCOUNT10</span>
        </p>
    </div>
</section>