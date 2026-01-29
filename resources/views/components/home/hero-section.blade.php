<section class="relative bg-gradient-to-r from-primaryFrom to-primaryTo">
    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-12">

            <!-- Left Content -->
            <div class="text-white">
                <span class="inline-block mb-4 px-4 py-1 text-sm font-semibold 
                             bg-gradient-to-r from-secondaryFrom to-secondaryTo 
                             rounded-full">
                    Trusted Diagnostic Company
                </span>

                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                    Accurate & Reliable <br>
                    <span class="text-cyan-200">Medical Diagnostics</span>
                </h1>

                <p class="mt-6 text-lg text-blue-100">
                    Diagno Labs delivers advanced pathology and diagnostic services
                    with precision, speed, and care you can trust.
                </p>

                <!-- Buttons -->
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#appointment"
                        class="px-8 py-3 rounded-full font-semibold text-white
                              bg-gradient-to-r from-secondaryFrom to-secondaryTo
                              shadow-lg hover:opacity-90 transition">
                        Book Test
                    </a>

                    <a href="#tests"
                        class="px-8 py-3 rounded-full font-semibold text-white
                              border border-white/40 hover:bg-white/10 transition">
                        View Tests
                    </a>
                </div>

                <!-- Trust Stats -->
                <div class="mt-10 flex gap-8 text-sm text-blue-100">
                    <div>
                        <span class="block text-2xl font-bold text-white">10K+</span>
                        Patients Served
                    </div>
                    <div>
                        <span class="block text-2xl font-bold text-white">120+</span>
                        Tests Available
                    </div>
                    <div>
                        <span class="block text-2xl font-bold text-white">24x7</span>
                        Support
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="relative">
                <div class="absolute -inset-4 rounded-3xl 
                            bg-gradient-to-r from-secondaryFrom to-secondaryTo 
                            opacity-30 blur-xl"></div>

                <img src="{{ asset('images/diagno-hero.png') }}"
                    alt="Diagno Labs Diagnostic"
                    class="relative rounded shadow-2xl w-full">
            </div>

        </div>
    </div>
</section>