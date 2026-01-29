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

<section class="relative w-full py-0 sm:py-10 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div
            class="relative rounded-3xl overflow-hidden
                   sm:min-h-[260px] lg:min-h-[320px]
                   flex items-center">

            <!-- Image -->
            <img
                src="{{ asset('images/breaker.png') }}"
                alt="Hero Image"
                class="relative sm:absolute
                       right-0 top-1/2 sm:-translate-y-1/2
                       w-full sm:w-auto
                       h-[120px] sm:h-[220px] lg:h-full
                       object-contain mx-auto sm:pr-6">
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