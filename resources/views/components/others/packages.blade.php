<section class="max-w-7xl mx-auto px-6 py-12">

    <h2 class="text-3xl font-bold text-primaryFrom mb-8">
        Health Packages
    </h2>

    <div id="packageGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"></div>

</section>
<template id="packageCardTemplate">
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden
                transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">

        <!-- Header -->
        <div class="relative bg-gradient-to-r from-secondaryFrom to-secondaryTo p-6 h-36">
            <span class="absolute top-3 right-4 bg-white/90 text-secondaryFrom text-xs font-semibold px-3 py-1 rounded-full">
                Package
            </span>

            <h3 class="text-white text-lg font-semibold leading-snug package-name"></h3>

            <div class="absolute bottom-4 right-6 text-white text-xl font-bold package-price"></div>
        </div>

        <!-- Body -->
        <div class="p-6 space-y-4">

            <div class="flex items-center justify-between text-sm text-gray-700">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-secondaryFrom" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3" />
                        <circle cx="12" cy="12" r="9" />
                    </svg>
                    <span>Reports in <strong class="package-time"></strong></span>
                </div>

                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-secondaryFrom" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7" />
                    </svg>
                    <span><strong class="package-tests"></strong> tests included</span>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4">
                <button
                    class="w-1/2 border-2 border-secondaryFrom text-secondaryFrom font-semibold py-2 rounded-xl
                           transition-all duration-300
                           hover:bg-secondaryFrom hover:text-white
                           hover:-translate-y-0.5 hover:shadow-lg
                           active:scale-95">
                    View Details
                </button>

                <button
                    class="w-1/2 bg-gradient-to-r from-secondaryFrom to-secondaryTo text-white font-semibold py-2 rounded-xl
                           transition-all duration-300
                           hover:from-secondaryTo hover:to-secondaryFrom
                           hover:-translate-y-0.5 hover:shadow-xl
                           active:scale-95">
                    Book Now
                </button>
            </div>

        </div>
    </div>
</template>
<script>
    const packages = [{
            name: "Basic Health Checkup",
            price: 999,
            tests: 45,
            time: "24 Hours"
        },
        {
            name: "Advanced Health Package",
            price: 1999,
            tests: 72,
            time: "24 Hours"
        },
        {
            name: "Full Body Checkup",
            price: 2999,
            tests: 92,
            time: "24 Hours"
        }
    ];

    const grid = document.getElementById('packageGrid');
    const template = document.getElementById('packageCardTemplate');

    packages.forEach(pkg => {
        const card = template.content.cloneNode(true);
        card.querySelector('.package-name').textContent = pkg.name;
        card.querySelector('.package-price').textContent = `₹${pkg.price}`;
        card.querySelector('.package-tests').textContent = pkg.tests;
        card.querySelector('.package-time').textContent = pkg.time;
        grid.appendChild(card);
    });
</script>