<template id="cardTemplate">
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden
                transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">

        <div class="relative bg-gradient-to-r from-primaryFrom to-primaryTo p-6 h-36">
            <h3 class="text-white text-lg font-semibold name"></h3>
            <div class="absolute bottom-4 right-6 text-white text-xl font-bold price"></div>
        </div>

        <div class="p-6 space-y-4">
            <p class="text-sm text-gray-700 meta"></p>

            <button
                class="view-btn w-full border-2 border-primaryFrom text-primaryFrom py-2 rounded-xl
                       hover:bg-primaryFrom hover:text-white transition">
                View Details
            </button>
        </div>
    </div>
</template>