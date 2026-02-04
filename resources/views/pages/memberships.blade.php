@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-16">

    <!-- TITLE -->
    <div class="mb-14 text-center">
        <h1 class="text-4xl font-bold text-primaryFrom">
            Membership Plans
        </h1>
        <p class="mt-3 text-gray-600">
            Choose the plan that fits your healthcare needs
        </p>

        <div class="mt-4 mx-auto h-1 w-24 rounded-full
                    bg-gradient-to-r from-primaryFrom to-primaryTo"></div>
    </div>

    <!-- GRID -->
    <div id="membershipGrid"
         class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    </div>

</section>

<script>
const memberships = [
  {
    price: "₹2999",
    duration: "/ Per Year",
    title: "Individual Plan",
    features: [
      "Cashless 8 OPD General Physician",
      "Cashless 5 OPD Physician",
      "Cashless 1 Full Body Checkup",
      "Cashless 1 Dietician Consultation",
      "Cashless 1 Neurologist Consultation",
      "Cashless 1 Eye Checkup",
      "30,000 Hospitalization Cover",
      "Up to 2 Lakh Medical Loan",
      "40% Discount on Diagnostics & Pathology",
      "Up to 30% Discount on Medicine"
    ]
  },
  {
    price: "₹4999",
    duration: "/ Per Year",
    title: "Family Plan",
    features: [
      "Cashless 12 OPD General Physician",
      "Cashless 8 OPD Physician",
      "Cashless 2 Full Body Checkup",
      "Cashless 2 Dietician Consultation",
      "Cashless 2 Neurologist Consultation",
      "Cashless 2 Eye Checkup",
      "80,000 Hospitalization Cover",
      "Up to 5 Lakh Medical Loan",
      "40% Discount on Diagnostics & Pathology",
      "Up to 30% Discount on Medicine"
    ]
  },
  {
    price: "₹5999",
    duration: "/ Per Year",
    title: "Maternity Plan",
    features: [
      "Cashless 6 OPD General Physician",
      "1 Annual Health Checkup",
      "1 Dietician Consultation",
      "1 Neurologist Consultation",
      "1 Eye Checkup",
      "Normal Maternity Cover ₹50,000",
      "C-Section Maternity Cover ₹1,00,000",
      "Up to 40% Discount on Diagnostics",
      "Up to 30% Discount on Medicines"
    ]
  }
];

const grid = document.getElementById("membershipGrid");

memberships.forEach(plan => {
  grid.innerHTML += `
    <div class="rounded-xl overflow-hidden shadow-lg border border-gray-200
                flex flex-col bg-white">

        <!-- PRICE -->
        <div class="bg-gradient-to-r from-secondaryFrom to-secondaryTo
                    text-white text-center py-8">
            <h2 class="text-4xl font-bold">${plan.price}</h2>
            <p class="uppercase text-sm mt-1">${plan.duration}</p>
        </div>

        <!-- PLAN TITLE -->
        <div class="bg-gradient-to-r from-primaryFrom to-primaryTo
                    text-white text-center py-3 text-lg font-semibold uppercase">
            ${plan.title}
        </div>

        <!-- FEATURES (NO WHITE ISSUE) -->
        <ul class="divide-y bg-secondaryFrom/10 flex-1">
            ${plan.features.map(f => `
              <li class="px-4 py-3 text-sm text-gray-800">
                ${f}
              </li>
            `).join("")}
        </ul>

    </div>
  `;
});
</script>
@endsection
