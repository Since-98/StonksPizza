@extends('layouts.app-layout')
@extends('layouts.nav')
@section('content')

<main class="my-8">
    <div class="container px-6 mx-auto pt-[70px]">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                <h3 class="text-3xl text-bold">Order Details</h3>
                <div class="flex-1">
                    <p>Name: {{ $bestellingen->name }}</p>
                    <p>Status: {{ $bestellingen->status }}</p>
                    <p>Total Price: €{{ $bestellingen->totaalprijs }}</p>
                    <!-- Add more order details as needed -->
                    <form action="{{ route('order.destroy', [$bestellingen->id]) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="px-4 py-2 text-white bg-red-700">Cancel Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
