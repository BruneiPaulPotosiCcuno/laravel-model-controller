@extends('layouts.app')

@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($movies as $movie)
    <div class="col">
        <div class="card h-100">
            <img src="https://picsum.photos/300/200?random={{ $loop->index }}" class="card-img-top" alt="{{ $movie->title }}">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">{{ $movie->date }}</p>
                <p class="card-text">{{ $movie->original_title }}</p>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
                <span class="badge bg-primary">{{ $movie->nationality }}</span>
                <span class="text-muted">{{ $movie->vote }}</span>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
