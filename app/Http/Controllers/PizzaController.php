<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();

        return view('pizzas.index', ['pizzas' => $pizzas]);
}
}
