@extends('layouts.main')

@section('container')

<h1 class="mb-3">All Post</h1>

@if ($post->count())
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <h3 class="card-title">{{ $post[0]->title }}</h3>
        <h5 class="card-title">By : {{ $post[0]->author }}</h5>
        <p class="card-text">{{ $post[0]->description }}</p>
        <p class="card-text"><small class="text-body-secondary">{{ $post[0]->created_at }}</small></p>
        </div>
    </div>
@else
    <p class="text-center fs-4">No Post Found</p>
@endif



    @foreach ($post as $books)
        <article class="mb-5">
            <h2>{{ $books['title'] }}</h2>
            <h5>By : {{ $books['author'] }}</h5>
            <p>{{ $books['description'] }}</p>
        </article>
    @endforeach
    
@endsection