<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        scrollbar-width: none;
    }
</style>
<div class="mt-6 py-6">

    <!-- TITLE -->
    <div class="mb-12 text-center">
        <h2 class="text-4xl font-semibold text-primaryFrom">
            Our Popular Packages
        </h2>

        <!-- Gradient Line -->
        <div class="mt-4 mx-auto h-1 w-24 rounded-full
                    bg-gradient-to-r from-primaryFrom to-primaryTo">
        </div>
    </div>

    <!-- CAROUSEL -->
    <div id="carousel"
        class="flex gap-6 overflow-x-auto no-scrollbar px-6">
    </div>

</div>



<script>
    document.addEventListener("DOMContentLoaded", () => {

        const tests = [{
                name: "Senior Citizen Checkup",
                old: 9100,
                price: 6789,
                off: 25,
                params: 58
            },
            {
                name: "Basic Weakness Checkup",
                old: 4550,
                price: 2730,
                off: 40,
                params: 63
            },
            {
                name: "Basic Joint Pain Checkup",
                old: 1750,
                price: 875,
                off: 50,
                params: 6
            },
            {
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
            },
            {
                name: "Heart Health Checkup",
                old: 5200,
                price: 3490,
                off: 33,
                params: 28
            },
            {
                name: "Women Wellness Checkup",
                old: 4800,
                price: 2990,
                off: 38,
                params: 35
            },
            {
                name: "Men Wellness Checkup",
                old: 4500,
                price: 2790,
                off: 38,
                params: 32
            },
        ];

        const carousel = document.getElementById("carousel");

        tests.forEach(t => {
            carousel.insertAdjacentHTML("beforeend", `
        <div class="w-[360px] flex-shrink-0 bg-white rounded-2xl shadow-xl p-6 mb-10">

            <div class="relative rounded-xl p-5 text-white bg-gradient-to-r from-primaryFrom to-primaryTo">
                <span class="absolute top-0 right-4 bg-yellow-400 text-black text-xs px-4 py-1 rounded-b-lg font-semibold">
                    Checkup
                </span>

                <h3 class="text-lg font-semibold mb-4">${t.name}</h3>

                <div class="flex items-center gap-3 mb-3">
                    <span class="line-through text-sm opacity-70">₹${t.old}</span>
                    <span class="text-2xl font-bold">₹${t.price}</span>
                </div>

                <span class="inline-block bg-yellow-400 text-black text-sm font-semibold px-4 py-1 rounded-md">
                    ${t.off}% Off
                </span>
            </div>

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

            <div class="flex gap-3 mt-6">
                <button class="w-1/2 border-2 border-primaryFrom text-primaryFrom font-semibold py-2 rounded-lg hover:bg-primaryFrom hover:text-white transition">
                    View Details
                </button>
                <button class="w-1/2 bg-gradient-to-r from-primaryFrom to-primaryTo text-white font-semibold py-2 rounded-lg">
                    Add to Cart
                </button>
            </div>

        </div>
        `);
        });

    });
</script>