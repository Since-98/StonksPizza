<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use App\Models\Bestelling;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function updateStatus($id)
    {
        // Fetch the order by ID
        $order = Bestelling::findOrFail($id);

        // Update the order status based on your business logic
        // For example, change 'pending' to 'in the oven' after 2 minutes
        if ($order->status === 'pending' && now()->diffInMinutes($order->created_at) >= 2) {
            $order->update(['status' => 'in the oven']);
        }

        return response()->json(['status' => $order->status]);
    }
}

