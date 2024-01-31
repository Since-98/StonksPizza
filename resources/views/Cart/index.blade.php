@extends('layouts.app-layout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')

<main class="my-8">
    <div class="container px-6 mx-auto pt-[100px]">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                @if ($message = Session::get('success'))
                <div class="p-4 mb-3 bg-green-400 rounded">
                    <p class="text-green-800">{{ $message }}</p>
                </div>
                @endif

                @if ($cartItems->isEmpty())
                <div class="p-4 mb-3 bg-white-400 rounded">
                    <h1 class="text-3xl text-white-800">
                        your StonksPizza  Cart is empty</h1>
                        <a href="{{ route('menu') }}" class="text-blue-500">Go to Menu</a>
                    <img src="Photos\empty-cart.png" alt="">

                </div>
                @else
                <h3 class="text-3xl text-bold">Details bestelling</h3>
                <div class="flex-4">
                    @php
                    $totaal = 0;
                    $totalQuantity = 0; // total quantity
                    @endphp

                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                        <thead>
                            <tr class="h-12 uppercase">
                                <th class="text-left">Name</th>
                                <th class="hidden text-right md:table-cell">size</th>
                                <th class="hidden text-right md:table-cell">price</th>
                                <th class="hidden text-right md:table-cell">quantity</th>
                                <th class="hidden text-right md:table-cell">Delete order</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                            <tr>
                                <td>
                                    <a href="#">
                                        <p class="mb-2 md:ml-4">{{ $item->pizza }}</p>
                                    </a>
                                </td>
                                @php
                                $totaalItem = $item->prijs * $item->grootte;
                                $totaal += $totaalItem;
                                $totalQuantity += $item->quantity; //
                                @endphp
                                <td class="hidden text-right md:table-cell">
                                    <span class="text-sm font-medium lg:text-base">
                                        @if($item->grootte == 0.8)
                                            Small
                                        @elseif($item->grootte == 1)
                                            Medium
                                        @elseif($item->grootte == 1.2)
                                            Large
                                        @else
                                            {{ $item->grootte }}
                                        @endif
                                    </span>
                                </td>
                                <td class="hidden text-right md:table-cell">
                                    <span class="text-sm font-medium lg:text-base">€{{ $item->prijs }}</span>
                                </td>
                                <td class="hidden text-right md:table-cell">
                                    <span class="text-sm font-medium lg:text-base">{{ $item->quantity }}</span>
                                </td>

                                <td class="hidden text-right md:table-cell">
                                    <form action="{{ route('cart.destroy', ['id' => $item->id]) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="fa fa-trash-o" style="font-size:48px;color:red"></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    Totaalprijs: €{{ $totaal }} ({{ $totalQuantity }} pizza's)
                    <br>

                    <p>
                        @csrf
                        @foreach ($cartItems as $item)
                        <input type="hidden" name="name" value="{{ $item->name }}">
                        <input type="hidden" name="groote" value="{{ $item->grootte }}">
                        <input type="hidden" name="totaalprijs" value="{{ $totaal }}">
                        @endforeach
                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf

                            <button type="submit" class="px-10 py-2 text-white bg-gray-600 rounded text-white">Bestellen</button>
                        </form>
                    </p>
                </div>
                @endif
            </div>
        </div>
    </div>
</main>

@endsection
