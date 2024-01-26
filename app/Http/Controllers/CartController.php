<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart()
    {
        $cartItems = CartItem::all();
        $totaal = $cartItems->sum('prijs');

        return view('cart.index', compact('cartItems', 'totaal'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'menu_id' => 'required',
            'grootte' => 'required',
            'quantity' => 'required',
        ]);

        $menu = Menu::find($request->menu_id);

        if (!$menu) {
            return view('cart.index')->with(['cartItems' => CartItem::all(), 'selectedIngredient' => $request->ingredient]);
        }

        $basePrice = $menu->prijs * $request->grootte * $request->quantity;
        $totalPrice = $basePrice;

        $newCartItem = CartItem::create([
            'pizza' => $menu->pizza,
            'grootte' => $request->grootte,
            'quantity' => $request->quantity,
            'prijs' => $totalPrice,
            'menu_id' => $request->menu_id,

        ]);

        session()->flash('success', 'Pizza is toegevoegd aan uw winkelwagen!');

        return redirect()->route('cart.index');
    }

    public function destroy($id)
    {
        CartItem::findOrFail($id)->delete();

        return redirect()->route('cart.index')->with('success', 'Pizza succesvol verwijderd');
    }
}
