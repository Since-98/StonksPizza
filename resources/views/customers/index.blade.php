@extends('layouts.main')
@section('title')
    {{ __('Klanten') }}
@endsection

@section('content')
<div class="container items-center">
    @foreach ($klants as $klant)
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-6">
                <div>{{ $klant->naam }}</div>
                <div>{{ $klant->addres }}</div>
                <div>{{ $klant->woonplaats }}</div>
                <div class="inline-flex gap-1 mb-1">
                    <form action="{{ route('customer.edit', [$klant]) }}" method="get">
                        <x-button class="ml-3 bg-blue-500 w-32">
                            {{ __('Wijzig') }}
                        </x-button>
                    </form>
                    <form action="{{ route('customer.destroy', [$klant]) }}" method="post">
                        @method('delete')
                        @csrf
                        <x-button class="ml-3 bg-red-500 w-32">
                            {{ __('Verwijder') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
