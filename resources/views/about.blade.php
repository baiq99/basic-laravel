@extends('layouts.main')

@section('container')
    <h1>About Page</h1>
    <h5>{{ $name }}</h5>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">    
@endsection
