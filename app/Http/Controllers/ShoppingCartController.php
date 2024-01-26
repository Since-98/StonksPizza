<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function show()
    {

        return view('shop.shopping-cart');
    }
}
