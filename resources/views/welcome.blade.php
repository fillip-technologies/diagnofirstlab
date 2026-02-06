@extends('layouts.app')

@section('content')

<div id="page-loader">
  <img src="{{ asset('images/diagno-lab.png') }}" alt="Diagno First Labs Logo">
</div>


<x-home.hero-section />

<!-- search -->
<x-home.search />

<!-- cer -->
<x-home.certification />

<!-- popular tests -->
<x-home.popular-test />

<!-- about -->
<x-home.about />

<section class="max-w-7xl mx-auto px-6 py-16">

  <div class="rounded-3xl
              bg-gradient-to-r from-primaryFrom to-primaryTo
              px-8 md:px-14 py-14
              flex flex-col md:flex-row
              items-center justify-between gap-10">

    <!-- LEFT CONTENT -->
    <div class="text-white max-w-xl">
      <span class="inline-block text-xs uppercase tracking-widest
                   bg-white/20 px-3 py-1 rounded-full mb-4">
        Introducing
      </span>

      <h2 class="text-3xl md:text-4xl font-bold leading-tight">
        Personalised Health Checkups
      </h2>

      <p class="mt-4 text-white/90">
        Get diagnostic packages tailored to your age, lifestyle
        and health needs — smarter tests, better care.
      </p>

      <!-- CTA BUTTONS -->
      <div class="mt-8 flex flex-wrap gap-4">
        <button
          type="button"
          class="px-8 py-3 rounded-xl font-semibold
                 bg-white text-primaryFrom
                 hover:bg-gray-100 transition">
          Order Now
        </button>

        <button
          type="button"
          class="px-8 py-3 rounded-xl font-semibold
                 border border-white/40 text-white
                 hover:bg-white/10 transition">
          View Packages
        </button>
      </div>
    </div>

    <!-- RIGHT ICON STRIP (CTA SUPPORT, NOT DECORATION) -->
    <div class="flex gap-4">

      <!-- Heart -->
      <div class="flex flex-col items-center justify-center
                  bg-white/15 rounded-2xl
                  px-5 py-4 text-white text-xs font-medium">
        <svg class="w-7 h-7 mb-2" fill="none" stroke="currentColor" stroke-width="1.8"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.6l-1-1a5.5 5.5 0 00-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 000-7.8z" />
        </svg>
        Heart
      </div>

      <!-- Brain -->
      <div class="flex flex-col items-center justify-center
                  bg-white/15 rounded-2xl
                  px-5 py-4 text-white text-xs font-medium">
        <svg class="w-7 h-7 mb-2" fill="none" stroke="currentColor" stroke-width="1.6"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9 4a3 3 0 00-3 3v1a3 3 0 00-2 5.2V14a3 3 0 003 3h1m6-13a3 3 0 013 3v1a3 3 0 012 5.2V14a3 3 0 01-3 3h-1M9 17h6" />
        </svg>
        Brain
      </div>

      <!-- Liver -->
      <div class="flex flex-col items-center justify-center
                  bg-white/15 rounded-2xl
                  px-5 py-4 text-white text-xs font-medium">
        <svg class="w-7 h-7 mb-2" fill="none" stroke="currentColor" stroke-width="1.6"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 12c0-4 3-7 7-7h4c4 0 7 3 7 7s-3 7-7 7H9" />
        </svg>
        Liver
      </div>

    </div>

  </div>
</section>



<!-- tets-all -->
<x-home.all-test />

<!-- vital -->
<x-home.vital />

<!-- cta -->
<x-home.cta />

<!-- booked checkup -->
<x-home.booked-checkup />

<!-- testimonials -->
<x-home.testimonials />

<!-- FAQ -->
<x-home.faq />


@endsection

<script>
  window.addEventListener("load", function() {
    const loader = document.getElementById("page-loader");

    setTimeout(() => {
      loader.style.display = "none";
    }, 1200);
  });
</script>