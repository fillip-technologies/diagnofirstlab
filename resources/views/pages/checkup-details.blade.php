@extends('layouts.app')

@section('content')

<!-- ================= MEDICAL HERO ================= -->
<section class="bg-gradient-to-r from-primaryFrom to-primaryTo">
    <div class="max-w-7xl mx-auto px-6 py-14 text-white">
        <p class="uppercase tracking-wide text-sm opacity-80 mb-2">
            Diagnostic Test / Health Checkup
        </p>
        <h1 id="title" class="text-4xl font-bold leading-tight"></h1>
        <p id="description" class="mt-4 max-w-3xl text-white/90"></p>
    </div>
</section>

<!-- ================= MAIN CONTENT ================= -->
<section class="max-w-7xl mx-auto px-6 py-14">

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

        <!-- ================= LEFT : MEDICAL DETAILS ================= -->
        <div class="lg:col-span-2 space-y-12">

            <!-- ===== CLINICAL INFORMATION ===== -->
            <div>
                <h2 class="text-xl font-semibold text-primaryFrom mb-6 flex items-center gap-3">
                    <!-- Microscope Icon -->
                    <svg class="w-6 h-6 text-primaryFrom" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M6 18h8" />
                        <path d="M3 18h18" />
                        <path d="M11 6l3 6" />
                        <circle cx="14" cy="5" r="2" />
                    </svg>
                    Clinical Information
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <div class="p-5 bg-slate-50 rounded-lg">
                        <p class="text-sm text-gray-500 mb-1">Sample Type</p>
                        <p id="sample" class="font-semibold text-primaryFrom"></p>
                    </div>

                    <div class="p-5 bg-slate-50 rounded-lg">
                        <p class="text-sm text-gray-500 mb-1">Fasting Requirement</p>
                        <p id="fasting" class="font-semibold text-primaryFrom"></p>
                    </div>

                    <div class="p-5 bg-slate-50 rounded-lg">
                        <p class="text-sm text-gray-500 mb-1">Report Availability</p>
                        <p id="reportTime" class="font-semibold text-primaryFrom"></p>
                    </div>
                </div>
            </div>

            <!-- ===== TESTS / PARAMETERS ===== -->
            <div>
                <h2 class="text-xl font-semibold text-primaryFrom mb-6 flex items-center gap-3">
                    <!-- Test Tube Icon -->
                    <svg class="w-6 h-6 text-primaryFrom" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M6 2h12" />
                        <path d="M9 2v18a3 3 0 006 0V2" />
                    </svg>
                    Tests Included
                </h2>

                <ul id="parametersList"
                    class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                </ul>
            </div>

            <!-- ===== DOCTOR NOTE ===== -->
            <div class="bg-sky-50 border-l-4 border-primaryFrom p-6 rounded-lg">
                <h3 class="font-semibold text-primaryFrom mb-2 flex items-center gap-2">
                    <!-- Doctor Icon -->
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 12a5 5 0 100-10 5 5 0 000 10z" />
                        <path d="M2 22a10 10 0 0120 0" />
                    </svg>
                    Doctor’s Recommendation
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Doctors recommend periodic diagnostic testing to monitor health
                    parameters and detect medical conditions at an early stage.
                </p>
            </div>

        </div>

        <!-- ================= RIGHT : MEDICAL SUMMARY ================= -->
        <aside class="bg-white border rounded-xl p-8 h-fit sticky top-28">

            <h3 class="text-lg font-semibold text-primaryFrom mb-4">
                Test Price
            </h3>

            <p id="mrp" class="text-gray-400 line-through text-sm"></p>

            <div class="flex items-baseline gap-2 mt-1 mb-1">
                <span id="price" class="text-4xl font-bold text-primaryFrom"></span>
            </div>

            <span id="discount" class="text-green-600 font-semibold text-sm"></span>

            <button
                class="w-full mt-6 bg-primaryFrom text-white py-3 rounded-lg font-semibold
                       hover:bg-primaryTo transition">
                Book Test
            </button>

            <button
                class="w-full mt-3 border border-primaryFrom text-primaryFrom py-3 rounded-lg
                       font-semibold hover:bg-primaryFrom hover:text-white transition">
                Home Sample Collection
            </button>

            <!-- MEDICAL TRUST -->
            <div class="mt-8 pt-6 border-t text-sm text-gray-600 space-y-3">
                <p>✔ NABL & ISO Certified Laboratory</p>
                <p>✔ Experienced Pathologists</p>
                <p>✔ Secure Digital Reports</p>
            </div>

        </aside>

    </div>

</section>

<script src="{{ asset('js/checkup-details.js') }}"></script>
@endsection