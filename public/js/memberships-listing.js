document.addEventListener("DOMContentLoaded", () => {

    fetch('/data/memberships.json')
        .then(res => res.json())
        .then(data => {

            const grid = document.getElementById('membershipGrid');

            Object.values(data).forEach(plan => {

                grid.insertAdjacentHTML('beforeend', `
                    <div class="relative bg-white rounded-2xl shadow-lg p-8
                                hover:shadow-2xl transition">

                        ${plan.recommended ? `
                            <span class="absolute -top-3 right-6 bg-green-500
                                         text-white text-xs px-4 py-1 rounded-full">
                                Most Popular
                            </span>` : ``}

                        <h3 class="text-2xl font-bold text-primaryFrom mb-2">
                            ${plan.name}
                        </h3>

                        <p class="text-gray-600 text-sm mb-6">
                            ${plan.description}
                        </p>

                        <div class="mb-6">
                            <span class="text-4xl font-bold text-primaryFrom">
                                ₹${plan.price}
                            </span>
                            <span class="text-gray-500 text-sm">
                                / ${plan.duration}
                            </span>
                        </div>

                        <ul class="space-y-3 mb-8 text-sm text-gray-700">
                            ${plan.benefits.map(b => `
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✔</span>
                                    ${b}
                                </li>
                            `).join('')}
                        </ul>

                        <button
                            class="w-full bg-gradient-to-r from-primaryFrom to-primaryTo
                                   text-white py-3 rounded-xl font-semibold
                                   hover:opacity-90 transition">
                            Buy Membership
                        </button>
                    </div>
                `);
            });

        })
        .catch(err => console.error("Membership JSON error:", err));
});
