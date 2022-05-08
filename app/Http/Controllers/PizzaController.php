<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PizzaController extends Controller
{
    public function index()
    {

        $pizzas = Pizza::all();
        $categories = Category::all();

        return view('dashboard_pizza',['pizzas' => $pizzas, 'categories' => $categories]);
    }

    public function update(Request $request){
        $pizza = Pizza::find($request->pname);

        $pizza->categoryname = $request->pcategory;
        $pizza->vegetarian = $request->vegetarian == null ? 0  : $request->vegetarian;

        $pizza->save();

        return redirect()->back();

    }

    public function delete(Request $request){
        
        DB::transaction(function() use ($request) {
            
            Order::where('pizzaname', $request->pname)->delete();
            
            Pizza::destroy($request->pname);
        
        });


        return redirect()->back();

    }

    public function store(Request $request){

        
        $existpizza = Pizza::find($request->pizzaname);
        if($existpizza)
        {
            return redirect()->back();
        }

            $pizza = new Pizza();

            $pizza->pname = $request->pizzaname;
            $pizza->vegetarian = $request->vegetarian == 'on' ?  1 : $request->vegetarian;;
            $pizza->categoryname = $request->pcategory;

            $pizza->save();

        return redirect()->back();
        
    }


}
