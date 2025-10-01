@extends('layout')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Gallery Masonry</h2>

    <div class="masonry">
        @foreach($images as $image)
            <div class="masonry-item">
                <img src="{{ asset('masonry/' . $image) }}" 
                     alt="Gallery Image" 
                     class="img-fluid rounded shadow">
            </div>
        @endforeach
    </div>
</div>



<style>
    .masonry {
        column-count: 3;
        column-gap: 1rem;
    }
    .masonry-item {
        break-inside: avoid;
        margin-bottom: 1rem;
    }
    .masonry-item img {
        width: 100%;
        display: block;
        border-radius: 10px;
    }
    @media(max-width: 768px) {
        .masonry { column-count: 2; }
    }
    @media(max-width: 576px) {
        .masonry { column-count: 1; }
    }
</style>
@endsection
