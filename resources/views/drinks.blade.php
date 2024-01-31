@extends('layouts.app-layout')

@section('content')
    <div class="beverages-section container mx-auto mt-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <h2 class="text-2xl font-semibold mb-4">Cold Drinks</h2>
            @php
                $coldDrinks = [];
                for ($i = 1; $i <= 4; $i++) {
                    $coldDrinks[] = [
                        'title' => 'Cold Drink ' . $i,
                        'image' => 'https://www.dominos.nl/ManagedAssets/NL/product/TCRC/NL_TCRC_all_menu_10334.png?v297550950',
                        'price' => number_format(rand(1, 5) + 0.99, 2),
                    ];
                }
            @endphp

            @foreach($coldDrinks as $drink)
                <div class="drink-item text-center p-6 bg-white rounded-lg shadow-md transition transform hover:scale-105">
                    <div class="drink-image">
                        <img src="{{ $drink['image'] }}" alt="{{ $drink['title'] }}" class="rounded-full w-20 h-20 mx-auto">
                    </div>
                    <p class="text-lg font-semibold mt-4">{{ $drink['title'] }}</p>
                    <p class="text-gray-500">${{ $drink['price'] }}</p>
                    <button class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Add to Cart</button>
                </div>
            @endforeach
        </div>
    </div>
@endsection
