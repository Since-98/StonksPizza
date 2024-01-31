<?php

namespace App\Http\Controllers;

use App\Models\Bestellingen;
use App\Models\CartItem;
use Illuminate\Http\Request;

class BestellingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
      public function index()
    {
        $cartItems = CartItem::all();
        $totaal = $cartItems->sum('prijs');

        $bestellingen = Bestellingen::all();

        foreach ($bestellingen as $bestelling) {
            $bestelling->totaalprijs = $bestelling->prijs;
            return view('Bestellingen.Bestel', ['bestellingen' => $bestellingen, 'cartItems' => $cartItems, 'totaal' => $totaal]);

    }
    }

    public function show()
    {
        /*
        $bestelling = Bestellingen::find($id);
        $cartItems = $request->input('cartItems');
        $totaal = 0;

        $orderDetails = [
            'items' => $cartItems,
            'total' => $totaal,
        ];

        return view('Bestellingen.Show', ['bestelling' => $bestelling]);
        */
    }

    public function storeOrder(Request $request)
    {
        Bestellingen::create([
            'datum' => now(),
            'status' => 'Besteld',


        ]);


        return redirect()->route('bestellingen.index')->with('success', 'Bestelling geplaatst!');
    }
    public function destroy($id)
    {
        $bestelling = Bestellingen::find($id);
        $bestelling->delete();

        return redirect()->route('bestellingen.index')->with('success', 'Bestelling  geannuleerd!');
    }
}

