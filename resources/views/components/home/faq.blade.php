<section class="py-16 bg-white">

    <!-- TITLE -->
    <div class="text-center mb-14">
        <h2 class="text-4xl font-bold text-primaryFrom">
            Frequently Asked Questions
        </h2>

        <div class="mt-4 mx-auto h-1 w-24 rounded-full
                    bg-gradient-to-r from-primaryFrom to-primaryTo"></div>

        <p class="mt-5 text-lg text-gray-600 max-w-2xl mx-auto">
            Everything you need to know about our diagnostic services.
        </p>
    </div>

    <!-- FAQ LIST -->
    <div class="max-w-4xl mx-auto px-6 space-y-4">

        <!-- FAQ ITEM -->
        <div class="border border-gray-200 rounded-2xl overflow-hidden">
            <button
                class="faq-toggle w-full flex items-center justify-between px-6 py-5
                       text-left font-semibold text-primaryFrom
                       hover:bg-primaryFrom/5 transition">
                <span>How do I book a test?</span>
                <svg class="w-5 h-5 transition-transform duration-300"
                    fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="faq-content hidden px-6 pb-5 text-gray-600">
                You can book a test directly from our website or simply message us
                on WhatsApp and our team will assist you.
            </div>
        </div>

        <!-- FAQ ITEM -->
        <div class="border border-gray-200 rounded-2xl overflow-hidden">
            <button
                class="faq-toggle w-full flex items-center justify-between px-6 py-5
                       text-left font-semibold text-primaryFrom
                       hover:bg-primaryFrom/5 transition">
                <span>Do you provide home sample collection?</span>
                <svg class="w-5 h-5 transition-transform duration-300"
                    fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="faq-content hidden px-6 pb-5 text-gray-600">
                Yes, we provide safe and hygienic home sample collection at your
                convenience.
            </div>
        </div>

        <!-- FAQ ITEM -->
        <div class="border border-gray-200 rounded-2xl overflow-hidden">
            <button
                class="faq-toggle w-full flex items-center justify-between px-6 py-5
                       text-left font-semibold text-primaryFrom
                       hover:bg-primaryFrom/5 transition">
                <span>How long does it take to receive reports?</span>
                <svg class="w-5 h-5 transition-transform duration-300"
                    fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="faq-content hidden px-6 pb-5 text-gray-600">
                Most reports are delivered within a few hours, depending on the
                type of test.
            </div>
        </div>

        <!-- FAQ ITEM -->
        <div class="border border-gray-200 rounded-2xl overflow-hidden">
            <button
                class="faq-toggle w-full flex items-center justify-between px-6 py-5
                       text-left font-semibold text-primaryFrom
                       hover:bg-primaryFrom/5 transition">
                <span>Are the reports accurate and reliable?</span>
                <svg class="w-5 h-5 transition-transform duration-300"
                    fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="faq-content hidden px-6 pb-5 text-gray-600">
                Yes, all tests are conducted using advanced technology and strict
                quality standards to ensure accuracy.
            </div>
        </div>

    </div>
</section>

<!-- FAQ SCRIPT -->
<script>
    document.querySelectorAll('.faq-toggle').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('svg');

            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });
</script>