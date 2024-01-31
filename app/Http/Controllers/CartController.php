<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Functie voor het bekijken van de winkelwagen
    public function viewCart()
    {
        // Alle winkelwagenitems ophalen uit de database
        $cartItems = CartItem::all();

        // Bereken totaalprijs van alle winkelwagenitems
        $totaal = $cartItems->sum('prijs');

        // View 'cart.index' renderen met gegevens
        return view('cart.index', compact('cartItems', 'totaal'));
    }

    // Functie voor het toevoegen van een item aan de winkelwagen
    public function store(Request $request)
    {
        // Valideer de invoergegevens van het formulier
        $request->validate([
            'menu_id' => 'required',
            'grootte' => 'required',
            'quantity' => 'required',
        ]);

        // Zoek het menu-item in de database op basis van het menu_id
        $menu = Menu::find($request->menu_id);

        // Als het menu-item niet gevonden wordt, terug naar de winkelwagen zonder toevoeging
        if (!$menu) {
            return view('cart.index')->with(['cartItems' => CartItem::all(), 'selectedIngredient' => $request->ingredient]);
        }

        // Bereken de basisprijs en totaalprijs van het nieuwe winkelwagenitem
        $basePrice = $menu->prijs * $request->grootte * $request->quantity;
        $totalPrice = $basePrice;

        // Maak een nieuw CartItem aan in de database
        $newCartItem = CartItem::create([
            'pizza' => $menu->pizza,
            'grootte' => $request->grootte,
            'quantity' => $request->quantity,
            'prijs' => $totalPrice,
            'menu_id' => $request->menu_id,
        ]);

        // Toon een succesmelding en ga door naar de winkelwagenweergave
        session()->flash('success', 'Pizza is toegevoegd aan uw winkelwagen!');
        return redirect()->route('cart.index');
    }

    // Functie voor het verwijderen van een item uit de winkelwagen
    public function destroy($id)
    {
        // Zoek het winkelwagenitem op basis van het id en verwijder het
        CartItem::findOrFail($id)->delete();

        // Terug naar de winkelwagenweergave met een succesmelding
        return redirect()->route('cart.index')->with('success', 'Pizza succesvol verwijderd');
    }
}
