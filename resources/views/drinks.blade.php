@extends('layouts.app-layout')


@section('content')
    <!-- Drinks Section -->
    <div class="drinks-section container mx-auto mt-12">
        <div class="coffees-section grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <h2 class="text-2xl font-semibold mb-4">Hot Coffees</h2>
            @php
            $hotCoffees = [];
            for ($i = 1; $i <= 10; $i++) {
                $hotCoffees[] = [
                    'title' => 'Hot Coffee ' . $i,
                    'image' => 'https://example.com/hot-coffee-' . $i . '.jpg',
                ];
            }
            @endphp

            @foreach($hotCoffees as $coffee)
            <div class="drink-item text-center p-6 bg-white rounded-lg shadow-md transition transform hover:scale-105">
                <div class="drink-image">
                    <img src='https://media.istockphoto.com/id/1303583671/photo/cup-glass-of-coffee-with-smoke-and-coffee-beans-on-old-wooden-background.jpg?s=612x612&w=0&k=20&c=fAh3m6Hqxz-qeA45Tj2jGARhRiGFhgm80dLVthnvlD8='] }}" alt="{{ $coffee['title'] }}" class="rounded-full w-20 h-20 mx-auto">
                </div>
                <p class="text-lg font-semibold mt-4">{{ $coffee['title'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="beverages-section grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
            <h2 class="text-2xl font-semibold mb-4">Cold Drinks</h2>
            @php
            $coldDrinks = [];
            for ($i = 1; $i <= 10; $i++) {
                $coldDrinks[] = [
                    'title' => 'Cold Drink ' . $i,
                    'image' => 'https://example.com/cold-drink-' . $i . '.jpg',
                ];
            }
            @endphp

            @foreach($coldDrinks as $drink)
            <div class="drink-item text-center p-6 bg-white rounded-lg shadow-md transition transform hover:scale-105">
                <div class="drink-image">
                    <img src='https://www.dominos.nl/ManagedAssets/NL/product/TCRC/NL_TCRC_all_menu_10334.png?v297550950'] }}" alt="{{ $drink['title'] }}" class="rounded-full w-20 h-20 mx-auto">
                </div>
                <p class="text-lg font-semibold mt-4">{{ $drink['title'] }}</p>
            </div>
            @endforeach
        </div>
    </div>

   
@endsection
