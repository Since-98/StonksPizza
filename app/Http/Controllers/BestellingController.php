<?php

namespace App\Http\Controllers;
use App\Models\Bestellingen;
use Illuminate\Http\Request;

class BestellingController extends Controller
{

        /**
         * Display a listing of the resource.
         */
        public function index()
        {


            $bestellingen = bestellingen::all();
            //dd($bestellingen);
            return view('Bestellingen.Bestel' , compact('bestellingen'));

        }

        public function show($orderId)
        {
            // Fetch the order details based on $orderId
            $bestellingen = bestellingen::find($bestellingid);

            // Return a view with order details
            return view('besBestellingentel.show', ['bestellingen' => $bestellingen]);
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            $bestelling = Bestellingen::find($id);

    // Check if the bestelling exists
    if (!$bestelling) {
        // Handle the case where the bestelling is not found, for example, redirect back
        return redirect()->back()->with('error', 'Bestelling not found');
    }

    // Pass the $bestelling variable to the view
    return view('Bestellingen.Edit', ['bestelling' => $bestelling]);
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request)
        {
            $data = $request->validate([
                'klantaccount' => 'required',
                'menu' => 'required',
                'TotalePrijs' => 'required|numeric',
                'status' => 'required'

            ]);
           // dd($song);
            $bestelling = bestellingen::find($request->id);
            $bestelling->update(['klantaccount' => $request->klantaccount, 'menu' => $request->menu, 'TotalePrijs' => $request->TotalePrijs, 'status' => $request->status ]);
            return redirect(route('Bestelling.Bestel'))->with('geslaagd', 'verandering toegepast');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id) {

        $bestelling = bestellingen::find($id);
        $bestelling->delete();
      return redirect(route('Bestellingen.Bestel'))->with('geslaagd', 'verwijdering toegepast'); }
    }
