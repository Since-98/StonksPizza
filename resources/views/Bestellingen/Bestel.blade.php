<!-- resources/views/Bestellingen/Bestel.blade.php -->

@extends('layouts.app-layout')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<main class="my-8">
    <div class="container px-6 mx-auto pt-[100px]">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                @if ($message = Session::get('success'))
                    <div class="p-4 mb-3 bg-green-400 rounded">
                        <p class="text-green-800">{{ $message }}</p>
                    </div>
                @endif

                @if ($bestellingen->isEmpty())
                    <div class="p-4 mb-3 bg-white-400 rounded">
                        <h1 class="text-3xl text-white-800">first place your order</h1>
                        <img src="Photos\empty-cart.png" alt="">
                    </div>
                @else
                    <h3 class="text-3xl text-bold">Order status</h3>
                    <div class="flex-4">
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                            <thead>
                                <tr class="h-12 uppercase">
                                    <th class="text-left">order id</th>
                                    <th class="hidden text-mid md:table-cell"> Date</th>
                                    <th class="hidden text-left md:table-cell"> Status </th>
                                    <th class="hidden text-left md:table-cell"> cancel order </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bestellingen as $bestelling)
                                    <tr>
                                        <td>{{ $bestelling->id }}</td>
                                        <td>{{ $bestelling->datum }}</td>
                                        <td>{{ $bestelling->status }}</td>

                                        <td>
                                            <form action="{{ route('bestellingen.destroy', ['id' => $bestelling->id]) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="px-4 py-2 text-white bg-red-700">Cancel</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>

@endsection
