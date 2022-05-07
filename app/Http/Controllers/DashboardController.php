<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $orders = Order::all()->countBy('pizzaname');

        return view('dashboard_charts', ['orders' => $orders]);
    }
}
