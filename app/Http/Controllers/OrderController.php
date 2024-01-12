<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        $pizzas = Pizza::all();
        return view('order.create', compact('pizzas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_address' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required|email',
            'pizzas' => 'required|array',
        ]);

        $order = Order::create([
            'status' => 'Pending',
            'customer_name' => $request->input('customer_name'),
            'customer_address' => $request->input('customer_address'),
            'customer_phone' => $request->input('customer_phone'),
            'customer_email' => $request->input('customer_email'),
        ]);

        $order->pizzas()->attach($request->input('pizzas'));

        return redirect()->route('orders.show', $order);
    }

    public function show(Order $order)
    {
        return view('order.show', compact('order'));
    }
}
