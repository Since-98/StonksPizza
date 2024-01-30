@extends('layouts.app-layout')


@section('content')
<!-- Hero Section -->
<div class="hero-section relative h-screen flex items-center bg-gray-900 text-white">
    <div class="hero-overlay absolute inset-0 bg-black opacity-60"></div>
    <div class="hero-content text-center z-10">
        <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold mb-4">Savor the Flavor: Pizza Delivered to You</h1>
        <p class="text-lg md:text-xl mb-8">Order online or pick up – the perfect pizza experience awaits!</p>
        <div class="cta-section text-center mt-12 bg-black-900 text-white py-8">
            <div class="flex items-center justify-center space-x-4">
                <a href="{{ route('menu') }}" class="bg-green-500 text-white py-6 px-8 rounded-full font-semibold hover:bg-green-400 transition duration-300">🛵Order Online</a>
                <p class="text-sm text-white-300">or</p>
                <a href="{{('menu')}}" class="bg-yellow-500 text-black py-6 px-8 rounded-full font-semibold hover:bg-yellow-400 transition duration-300">
                    🏡 Pick Up</a>
            </div>
        </div>
    </div>
    <img src="Photos\0006_Foorn_HeroSingleItemsSquare-21.jpg" class="hero-image object-cover w-full h-full" alt="Pizza Hero Image">
</div>

<div class="features-section container mx-auto mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    @php
    $features = [
        [
            'icon' => '<i class="fas fa-clock text-2xl"></i>',
            'title' => 'Fast Delivery',
            'description' => 'Satisfy your cravings in no time!',
        ],
        [
            'icon' => '<i class="fas fa-hand-holding-heart text-2xl"></i>',
            'title' => 'Quality Ingredients',
            'description' => 'Only the finest ingredients go into our pizzas.',
        ],
        [
            'icon' => '<i class="fas fa-dollar-sign text-2xl"></i>',
            'title' => 'Affordable Prices',
            'description' => 'Delicious pizzas that won\'t break the bank.',
        ],
        [
            'icon' => '<i class="fas fa-utensils text-2xl"></i>',
            'title' => 'Variety of Options',
            'description' => 'Explore a diverse menu of mouthwatering pizzas.',
        ],
    ];
    @endphp

    @foreach($features as $feature)
    <div class="feature-item text-center p-6 bg-white rounded-lg shadow-md transition transform hover:scale-105">
        <div class="feature-icon bg-yellow-500 rounded-full p-3 mx-auto">
            {!! $feature['icon'] !!}
        </div>
        <p class="text-lg font-semibold mt-4">{{ $feature['title'] }}</p>
        <p class="text-sm">{{ $feature['description'] }}</p>
    </div>
    @endforeach
</div>


@endsection
