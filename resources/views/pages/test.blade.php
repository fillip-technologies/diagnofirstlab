@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-14">

    <!-- TITLE -->
    <div class="mb-14 text-center">
        <h1 class="text-4xl font-bold text-primaryFrom">
            Browse All Tests
        </h1>

        <div class="mt-4 mx-auto h-1 w-24 rounded-full
                    bg-gradient-to-r from-primaryFrom to-primaryTo">
        </div>
    </div>

    <!-- GRID -->
    <div id="testsGrid"
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
    </div>

</section>

<script src="{{ asset('js/tests-listing.js') }}"></script>
@endsection