<section class="max-w-7xl mx-auto px-6 py-12">

    <h2 class="text-3xl font-bold text-primaryFrom mb-8">
        All Diagnostic Tests
    </h2>

    <!-- Cards Container -->
    <div id="testGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"></div>

</section>

<template id="testCardTemplate">
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

        <div class="relative bg-gradient-to-r from-primaryFrom to-primaryTo p-6 h-36">
            <span class="absolute top-3 right-4 bg-yellow-400 text-black text-xs font-semibold px-3 py-1 rounded-full">
                Test
            </span>

            <h3 class="text-white text-lg font-semibold leading-snug test-name"></h3>

            <div class="absolute bottom-4 right-6 text-white text-xl font-bold test-price"></div>
        </div>

        <div class="p-6 space-y-4">

            <div class="flex items-center justify-between text-sm text-gray-700">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-secondaryFrom" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 4l16 16M20 4L4 20" />
                    </svg>
                    <span><strong class="test-params"></strong> parameters included</span>
                </div>

                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-secondaryFrom" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3" />
                        <circle cx="12" cy="12" r="9" />
                    </svg>
                    <span>Reports in <strong class="test-time"></strong></span>
                </div>
            </div>

            <div class="flex gap-4">
                <button
                    class="w-1/2 border-2 border-primaryFrom text-primaryFrom font-semibold py-2 rounded-xl
               transition-all duration-300 ease-out
               hover:bg-primaryFrom hover:text-white
               hover:-translate-y-0.5 hover:shadow-lg
               active:scale-95">
                    View Details
                </button>

                <button
                    class="w-1/2 bg-gradient-to-r from-primaryFrom to-primaryTo text-white font-semibold py-2 rounded-xl
               transition-all duration-300 ease-out
               hover:from-primaryTo hover:to-primaryFrom
               hover:-translate-y-0.5 hover:shadow-xl
               active:scale-95">
                    Add to Cart
                </button>
            </div>


        </div>
    </div>
</template>
<script>
    const tests = [{
            name: "TSH (Thyroid Stimulating Hormone - Serum)",
            price: 390,
            parameters: 1,
            time: "3 Hours"
        },
        {
            name: "Urine RE",
            price: 110,
            parameters: 17,
            time: "3 Hours"
        },
        {
            name: "RBS (Glucose - Random)",
            price: 70,
            parameters: 1,
            time: "3 Hours"
        },
        {
            name: "RBS (Glucose - Random)",
            price: 70,
            parameters: 1,
            time: "3 Hours"
        },
        {
            name: "RBS (Glucose - Random)",
            price: 70,
            parameters: 1,
            time: "3 Hours"
        },
        {
            name: "RBS (Glucose - Random)",
            price: 70,
            parameters: 1,
            time: "3 Hours"
        }
    ];

    const grid = document.getElementById('testGrid');
    const template = document.getElementById('testCardTemplate');

    tests.forEach(test => {
        const card = template.content.cloneNode(true);
        card.querySelector('.test-name').textContent = test.name;
        card.querySelector('.test-price').textContent = `₹${test.price}`;
        card.querySelector('.test-params').textContent = test.parameters;
        card.querySelector('.test-time').textContent = test.time;
        grid.appendChild(card);
    });
</script>