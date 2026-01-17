<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        scrollbar-width: none;
    }
</style>

<div class="py-20 bg-white">

    <!-- TITLE -->
    <div class="mb-12 text-center">
        <h2 class="text-4xl font-semibold text-primaryFrom">
            Browse All Tests
        </h2>

        <div class="mt-4 mx-auto h-1 w-24 rounded-full
                    bg-gradient-to-r from-primaryFrom to-primaryTo">
        </div>
    </div>

    <!-- CAROUSEL -->
    <div id="allTestsCarousel"
        class="flex gap-6 overflow-x-auto no-scrollbar px-6 py-2">
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        fetch('/data/tests.json')
            .then(res => res.json())
            .then(data => {

                const carousel = document.getElementById("allTestsCarousel");

                Object.values(data).forEach(t => {
                    carousel.insertAdjacentHTML("beforeend", `
                    <div class="w-[360px] flex-shrink-0 bg-white rounded-2xl shadow-xl p-4">

                        <div class="relative rounded-xl p-5 text-white bg-gradient-to-r from-primaryFrom to-primaryTo">
                            <span class="absolute top-0 right-4 bg-yellow-400 text-black text-xs px-4 py-1 rounded-b-lg font-semibold">
                                Test
                            </span>

                            <h3 class="text-lg font-semibold mb-4 leading-snug">
                                ${t.name}
                            </h3>

                            <div class="flex items-center gap-3 mb-2">
                                <span class="line-through text-sm opacity-70">₹${t.mrp}</span>
                                <span class="text-2xl font-bold">₹${t.price}</span>
                            </div>

                            <span class="inline-block bg-yellow-400 text-black text-sm font-semibold px-4 py-1 rounded-md">
                                ${t.discount}
                            </span>
                        </div>

                        <div class="flex justify-between items-center mt-5 px-2">
                            <div>
                                <p class="font-semibold">${t.params} parameters</p>
                                <p class="text-sm text-gray-500">included</p>
                            </div>
                            <div>
                                <p class="font-semibold">Reports within</p>
                                <p class="text-sm font-semibold text-primaryFrom">${t.time}</p>
                            </div>
                        </div>

                        <div class="flex gap-3 mt-6 items-stretch">
                            <button
                                onclick="openDetails('${t.slug}')"
                                class="w-1/2 border-2 border-primaryFrom text-primaryFrom font-semibold py-2 rounded-lg
                                       hover:bg-primaryFrom hover:text-white transition">
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
    });
</script>

<script>
    function openDetails(slug) {
        window.location.href = `/details/tests/${slug}`;

    }
</script>