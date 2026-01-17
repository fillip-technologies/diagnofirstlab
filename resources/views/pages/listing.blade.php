@extends('layouts.app')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-12">
    <h1 id="pageTitle" class="text-3xl font-bold text-primaryFrom mb-8"></h1>

    <div id="grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"></div>
</section>

@include('partials.card-template')

<script src="{{ asset('js/listing-loader.js') }}"></script>

@endsection