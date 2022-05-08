<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {

        $orders = Order::with('pizzas.categories')->where('user_id', Auth::user()->id)->get();

        return view('home.order', ['orders' => $orders]);
    }

    public function store(Request $request){

        if($request->amount > 0){
            
            $order = new Order();
            
            $order->pizzaname = $request->pizzaname;
            $order->user_id = Auth::user()->id;
            $order->amount = $request->amount;
            $order->taken = now();
            
            $order->save();
     
            return redirect()->route('order.index');

        }else{
            return redirect()->back();
        }
        

    }

}
