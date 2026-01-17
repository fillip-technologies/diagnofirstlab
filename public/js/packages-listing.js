document.addEventListener("DOMContentLoaded", () => {

    fetch('/data/checkups.json')
        .then(res => res.json())
        .then(data => {

            const grid = document.getElementById('packagesGrid');

            Object.values(data).forEach(t => {

                grid.insertAdjacentHTML("beforeend", `
                    <div class="bg-white rounded-2xl shadow-xl p-6 hover:shadow-2xl transition">

                        <!-- TOP GRADIENT -->
                        <div class="relative rounded-xl p-5 text-white
                                    bg-gradient-to-r from-primaryFrom to-primaryTo">
                            <span class="absolute top-0 right-4 bg-yellow-400 text-black
                                         text-xs px-4 py-1 rounded-b-lg font-semibold">
                                Checkup
                            </span>

                            <h3 class="text-lg font-semibold mb-4 leading-snug">
                                ${t.name}
                            </h3>

                            <div class="flex items-center gap-3 mb-2">
                                <span class="line-through text-sm opacity-70">
                                    ₹${t.mrp}
                                </span>
                                <span class="text-2xl font-bold">
                                    ₹${t.price}
                                </span>
                            </div>

                            <span class="inline-block bg-yellow-400 text-black
                                         text-sm font-semibold px-4 py-1 rounded-md">
                                ${t.discount}
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
                                <p class="text-sm font-semibold text-primaryFrom">
                                    ${t.time}
                                </p>
                            </div>
                        </div>

                        <!-- BUTTONS -->
                        <div class="flex gap-3 mt-6">
                            <button
                                onclick="openCheckup('${t.slug}')"
                                class="w-1/2 border-2 border-primaryFrom
                                       text-primaryFrom font-semibold py-2 rounded-lg
                                       hover:bg-primaryFrom hover:text-white transition">
                                View Details
                            </button>

                            <button
                                class="w-1/2 bg-gradient-to-r from-primaryFrom to-primaryTo
                                       text-white font-semibold py-2 rounded-lg">
                                Add to Cart
                            </button>
                        </div>

                    </div>
                `);
            });
        });
});

function openCheckup(slug) {
    window.location.href = `/details/checkups/${slug}`;
}
