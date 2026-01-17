document.addEventListener("DOMContentLoaded", () => {
    fetch('/data/tests.json')
        .then(res => res.json())
        .then(data => {
            const carousel = document.getElementById('testsCarousel');

            Object.values(data).forEach(t => {

                // ❌ homepage pe nahi dikhana
                if (!t.show_on_home) return;

                carousel.insertAdjacentHTML("beforeend", `
                  <div class="w-[360px] bg-white rounded-2xl shadow-xl p-4">
                    <div class="bg-gradient-to-r from-primaryFrom to-primaryTo text-white p-5 rounded-xl">
                      <h3 class="text-lg font-semibold">${t.name}</h3>
                      <p class="text-2xl font-bold mt-2">₹${t.price}</p>
                      <span class="bg-yellow-400 text-black px-3 py-1 text-sm rounded">${t.discount}</span>
                    </div>

                    <div class="mt-4 flex justify-between">
                      <p>${t.params} parameters</p>
                      <p>${t.time}</p>
                    </div>

                    <button
                      onclick="openTest('${t.slug}')"
                      class="mt-4 w-full border border-primaryFrom text-primaryFrom py-2 rounded">
                      View Details
                    </button>
                  </div>
                `);
            });
        });
});

function openTest(slug) {
    window.location.href = `/details/tests/${slug}`;
}
