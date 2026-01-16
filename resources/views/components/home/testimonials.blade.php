<section class="py-14 bg-white overflow-hidden">

    <!-- TITLE -->
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-primaryFrom">
            What Our Customers Say
        </h2>

        <div class="mt-4 mx-auto h-1 w-24 rounded-full
                    bg-gradient-to-r from-primaryFrom to-primaryTo"></div>

        <p class="mt-5 text-lg text-gray-600 max-w-2xl mx-auto">
            Genuine feedback from people who trusted us for their diagnostics.
        </p>
    </div>

    <!-- CAROUSEL -->
    <div class="relative max-w-6xl mx-auto px-6">

        <!-- SCROLLER -->
        <div id="testimonialCarousel"
            class="flex gap-6 overflow-x-auto scroll-smooth no-scrollbar pb-4">

            <!-- CARD -->
            <div class="min-w-[360px] rounded-3xl border border-gray-200 p-8 bg-white
                        hover:shadow-xl transition">
                <p class="text-gray-600 leading-relaxed">
                    “The home sample collection was extremely smooth and the
                    reports were delivered much faster than expected.”
                </p>

                <div class="mt-6 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-primaryFrom/10
                                flex items-center justify-center
                                text-primaryFrom font-bold">
                        A
                    </div>
                    <p class="font-semibold text-primaryFrom">
                        Amit Sharma
                    </p>
                </div>
            </div>

            <!-- CARD -->
            <div class="min-w-[360px] rounded-3xl border border-gray-200 p-8 bg-white
                        hover:shadow-xl transition">
                <p class="text-gray-600 leading-relaxed">
                    “Very professional staff and accurate reports.
                    Booking tests through WhatsApp was super convenient.”
                </p>

                <div class="mt-6 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-secondaryFrom/10
                                flex items-center justify-center
                                text-secondaryFrom font-bold">
                        P
                    </div>
                    <p class="font-semibold text-primaryFrom">
                        Priya Verma
                    </p>
                </div>
            </div>

            <!-- CARD -->
            <div class="min-w-[360px] rounded-3xl border border-gray-200 p-8 bg-white
                        hover:shadow-xl transition">
                <p class="text-gray-600 leading-relaxed">
                    “Affordable packages with timely delivery.
                    Customer support was responsive and helpful.”
                </p>

                <div class="mt-6 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-primaryFrom/10
                                flex items-center justify-center
                                text-primaryFrom font-bold">
                        R
                    </div>
                    <p class="font-semibold text-primaryFrom">
                        Rahul Singh
                    </p>
                </div>
            </div>

            <div class="min-w-[360px] rounded-3xl border border-gray-200 p-8 bg-white
                        hover:shadow-xl transition">
                <p class="text-gray-600 leading-relaxed">
                    “Affordable packages with timely delivery.
                    Customer support was responsive and helpful.”
                </p>

                <div class="mt-6 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-primaryFrom/10
                                flex items-center justify-center
                                text-primaryFrom font-bold">
                        R
                    </div>
                    <p class="font-semibold text-primaryFrom">
                        Rahul Singh
                    </p>
                </div>
            </div>

            <div class="min-w-[360px] rounded-3xl border border-gray-200 p-8 bg-white
                        hover:shadow-xl transition">
                <p class="text-gray-600 leading-relaxed">
                    “Affordable packages with timely delivery.
                    Customer support was responsive and helpful.”
                </p>

                <div class="mt-6 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-primaryFrom/10
                                flex items-center justify-center
                                text-primaryFrom font-bold">
                        R
                    </div>
                    <p class="font-semibold text-primaryFrom">
                        Rahul Singh
                    </p>
                </div>
            </div>

        </div>

        <!-- CONTROLS -->
        <div class="mt-8 flex justify-center gap-4">
            <button onclick="scrollTestimonials(-1)"
                class="w-10 h-10 rounded-full border border-primaryFrom
                       text-primaryFrom hover:bg-primaryFrom hover:text-white transition">
                ‹
            </button>
            <button onclick="scrollTestimonials(1)"
                class="w-10 h-10 rounded-full border border-primaryFrom
                       text-primaryFrom hover:bg-primaryFrom hover:text-white transition">
                ›
            </button>
        </div>

    </div>
</section>

<script>
    function scrollTestimonials(direction) {
        const carousel = document.getElementById('testimonialCarousel');
        const scrollAmount = 380;
        carousel.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
</script>