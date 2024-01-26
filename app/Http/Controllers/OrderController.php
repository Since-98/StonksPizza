<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('order.index');
    }
    public function create()
    {

            $customer = Customer::findOrFail(auth()->user()->id);
            $user = auth()->user();

            $startday = Carbon::now()->toDateString();
            $endday = Carbon::now()->addWeek(2)->toDateString();
            $perioddays = CarbonPeriod::create($startday, '1 day', $endday);
            $deliverydays = [];

            $starttime = Carbon::now()->setTime(12 ,0,0,0);
            $endtime = Carbon::now()->setTime(23 ,59,59,59);
            $periodtime = CarbonPeriod::create($starttime, '15 minutes', $endtime);
            $deliverytimes = [];

            foreach ($periodtime as $dt)
            {
                array_push($deliverytimes, $dt);
            }

            foreach ($perioddays as $dt)
            {
                array_push($deliverydays, $dt);
            }

            $pricetotal = 0.00;
            $orderitems = Session::get('cart.orderitems');
            if($orderitems != null) {
                foreach ($orderitems as $orderitem) {
                    $pricetotal += $orderitem->price();
                }
            }
            return view('order.create', compact('orderitems', 'pricetotal', 'deliverytimes', 'deliverydays', 'customer', 'user'));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreOrderRequest $request)
        {
            $validated = $request->validated();

           $orderitems = Session::get('cart.orderitems');
           //Als er orderitems aan winkelmandje zijn toegevoegd
           if($orderitems != null) {
               $day = $request->input('day');
               $time = $request->input('time');
               $datetime = Carbon::parse($day . $time);

               $customer = Customer::findOrFail(auth()->user()->id);
               $customer->first_name = $request->input('firstname');
               $customer->last_name = $request->input('lastname');
               $customer->address = $request->input('address');
               $customer->phone = $request->input('phone');
               $customer->zipcode = $request->input('zipcode');
               $customer->increment('pizza_points', 10);
               $customer->save();

               $user = User::findOrFail(auth()->user()->id);
               $user->email = $request->input('email');
               $user->save();

               $order = new Order();
               $order->deliverytime = $datetime;
               $order->customer_id = $customer->id;
               $order->save();

               foreach ($orderitems as $orderitem_id => $orderitem) {
                   $orderitem->order()->associate($order->id);
                   $orderitem->save();
               }
               Session::forget('cart.orderitems');
               return redirect()->route('order.show', $order->id);
           }
           else {
               return abort(403);
           }
        }
    }

