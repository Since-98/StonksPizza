<!-- resources/views/bestellingen/index.blade.php -->

@extends('layouts.app-layout')
@extends('layouts.nav')
@section('content')
<main class="my-8">
    <div class="container px-6 mx-auto pt-[70px]">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                @if ($message = Session::get('success'))
                    <div class="p-4 mb-3 bg-green-400 rounded">
                        <p class="text-green-800">{{ $message }}</p>
                    </div>
                @endif
                <h3 class="text-3xl text-bold">Orders</h3>
                <div class="flex-1">
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                        <thead>
                            <tr class="h-12 uppercase">
                                <th class="text-left">Klantaccount</th>
                                <th class="hidden text-left md:table-cell"> Menu </th>
                                <th class="hidden text-mid md:table-cell"> Totale Prijs </th>
                                <th class="hidden text-right md:table-cell"> Status </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bestellingen as $bestelling)
                            <tr>
                                <td>
                                    <a href="#">
                                        <p class="mb-2 md:ml-4">{{ $bestelling->klantaccount }}</p>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <p class="mb-2 md:ml-4">{{ $bestelling->menu }}</p>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <p class="mb-4 :ml-1">€{{ $bestelling->TotalePrijs }}</p>
                                    </a>
                                </td>
                                <td class="hidden text-right md:table-cell" id="status-{{ $bestelling->id }}">
                                    <a href="#">
                                        <p class="mb-2 md:ml-4">{{ $bestelling->status }}</p>
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
