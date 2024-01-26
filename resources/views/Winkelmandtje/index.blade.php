@extends('layouts.app-layout')
@extends('layouts.nav')
@section('content')

<main class="my-8">
  <div class="container px-6 mx-auto  pt-[70px]">
    <div class="flex justify-center my-6">
      <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
        @if ($message = Session::get('success'))
        <div class="p-4 mb-3 bg-green-400 rounded">
          <p class="text-green-800">{{ $message }}</p>
        </div>
        @endif
        <h3 class="text-3xl text-bold">Winkelmandje</h3>
        <div class="flex-1">
          @php
          $totaal = 0;
          @endphp
          <table class="w-full text-sm lg:text-base" cellspacing="0">
            <thead>
              <tr class="h-12 uppercase">
                <th class="text-left">Name</th>
                <th class="hidden text-right md:table-cell"> Grootte</th>
                <th class="hidden text-right md:table-cell"> Prijs</th>

                <th class="hidden text-right md:table-cell"> Verwijder </th>
              </tr>
            </thead>
            <tbody>



              <tr>
                <td>
                  <a href="#">
                    <p class="mb-2 md:ml-4"></p>
                  </a>

                </td>


                <td class="hidden text-right md:table-cell">
                  <span class="text-sm font-medium lg:text-base">

                  </span>
                </td>
                <td class="hidden text-right md:table-cell">
                  <span class="text-sm font-medium lg:text-base">
                  €
                  </span>
                </td>

                <td class="hidden text-right md:table-cell">
                  <form action="{{ route('Winkelmandje.destroy'," method="POST">
                    @method('delete')
                    @csrf
                    <button class="px-4 py-2 text-white bg-red-600">x</button>
                  </form>

                </td>
              </tr>

            </tbody>
          </table>
          Totaalprijs:
          <p>
            <form action="" method="POST">
            @csrf

                <input type="hidden" name="name" value="">

                <input type="hidden" name="groote" value="">

                <input type="hidden" name="totaalprijs" value="">


                <button  class="px-10 py-2 text-white bg-gray-600 rounded">Bestellen</button>
            </form>



        </div>
      </div>
    </div>
  </div>
</main>
@endsection
