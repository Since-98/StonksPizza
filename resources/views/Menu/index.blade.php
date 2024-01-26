@extends('layouts.app-layout')
@include('components.header')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container px-6 mx-auto pt-[100px]">
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($menus as $menu)
        <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md bg-white">
            <div class="flex items-end justify-end w-full bg-cover">
                <!-- Your background image or content here -->
            </div>
            <div class="px-5 py-3">
                <h1>{{ $menu->pizza }}</h1>
                <span class="mt-2 text-gray-500">€{{ $menu->prijs }}</span>
                <form action="{{ route('Cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                    <p>{{ $menu->ingrediënten }}</p>
                    <img src="{{ $menu->plaatje }}">

                    <label for="grootte">Grootte:</label>
                    <select name="grootte" id="grootte">
                        <option value="0.8">Klein 20cm</option>
                        <option value="1" selected>Medium 25cm</option>
                        <option value="1.2">Groot 30cm</option>
                    </select>

                    <label for="quantity">Aantal:</label>
                    <select name="quantity" id="quantity">
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>

                    <input type="hidden" name="id" value="{{ $menu->id }}">

                    <br>

                    <button type="submit" class="px-4 py-2 text-white bg-yellow-500 rounded">Toevoegen</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('components.footer')
@endsection
