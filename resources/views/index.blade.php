<!-- resources/views/pizzas/index.blade.php -->

@extends('layouts.app')  {{-- Assuming you have a master layout --}}

@section('content')
    <h1>Pizza Menu</h1>

    <div class="pizzas">
        @foreach ($pizzas as $pizza)
            <div class="pizza">
                <h2>{{ $pizza->name }}</h2>
                <p>{{ $pizza->description }}</p>
                <img src="{{ asset($pizza->photo_path) }}" alt="{{ $pizza->name }}">
            </div>
        @endforeach
    </div>
@endsection
