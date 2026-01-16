<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        scrollbar-width: none;
    }
</style>

<div class="py-20 bg-white">

    <div class="mb-12 text-center">
        <h2 class="text-4xl font-semibold text-primaryFrom">
            Browse All Tests
        </h2>

        <!-- Gradient Line -->
        <div class="mt-4 mx-auto h-1 w-24 rounded-full
                    bg-gradient-to-r from-primaryFrom to-primaryTo">
        </div>
    </div>

    <div id="allTestsCarousel"
        class="flex gap-6 overflow-x-auto no-scrollbar px-6">
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        const tests = [{
                name: "Diabetes Checkup",
                old: 3200,
                price: 1890,
                off: 41,
                params: 42
            },
            {
                name: "Thyroid Profile",
                old: 1800,
                price: 1290,
                off: 28,
                params: 5
            },
            {
                name: "Liver Function Test",
                old: 2500,
                price: 1650,
                off: 34,
                params: 12
            },
            {
                name: "Kidney Function Test",
                old: 2400,
                price: 1590,
                off: 33,
                params: 10
            }
        ];

        const carousel = document.getElementById("allTestsCarousel");

        tests.forEach(t => {
            carousel.insertAdjacentHTML("beforeend", `
            <div class="w-[360px] flex-shrink-0 bg-white rounded-2xl shadow-xl p-4">

                <!-- TOP GRADIENT -->
                <div class="relative rounded-xl p-5 text-white bg-gradient-to-r from-primaryFrom to-primaryTo">
                    <span class="absolute top-0 right-4 bg-yellow-400 text-black text-xs px-4 py-1 rounded-b-lg font-semibold">
                        Test
                    </span>

                    <h3 class="text-lg font-semibold mb-4 leading-snug">
                        ${t.name}
                    </h3>

                    <div class="flex items-center gap-3 mb-2">
                        <span class="line-through text-sm opacity-70">₹${t.old}</span>
                        <span class="text-2xl font-bold">₹${t.price}</span>
                    </div>

                    <span class="inline-block bg-yellow-400 text-black text-sm font-semibold px-4 py-1 rounded-md">
                        ${t.off}% Off
                    </span>
                </div>

                <!-- INFO -->
                <div class="flex justify-between items-center mt-5 px-2">
                    <div>
                        <p class="font-semibold">${t.params} parameters</p>
                        <p class="text-sm text-gray-500">included</p>
                    </div>
                    <div>
                        <p class="font-semibold">Reports within</p>
                        <p class="text-sm font-semibold text-primaryFrom">3 Hours</p>
                    </div>
                </div>

                <!-- BUTTONS -->
                <div class="flex gap-3 mt-6">
                    <button
                        class="w-1/2 border-2 border-primaryFrom text-primaryFrom font-semibold py-2 rounded-lg hover:bg-primaryFrom hover:text-white transition">
                        View Details
                    </button>
                    <button
                        class="w-1/2 bg-gradient-to-r from-primaryFrom to-primaryTo text-white font-semibold py-2 rounded-lg">
                        Add to Cart
                    </button>
                </div>

            </div>
        `);
        });

    });
</script>