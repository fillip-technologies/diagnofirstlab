@extends('layouts.app')

@section('content')

<x-home.hero-section />

<!-- search -->
<x-home.search />

<!-- cer -->
<x-home.certification />

<!-- popular tests -->
<x-home.popular-test />

<!-- about -->
<x-home.about />

<section class="relative w-full py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="relative rounded-3xl overflow-hidden min-h-[320px] flex items-center">

            <!-- Image -->
            <img
                src="{{ asset('images/breaker.png') }}"
                alt="Hero Image"
                class="absolute right-0 top-1/2 -translate-y-1/2 h-full object-contain pr-6">

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