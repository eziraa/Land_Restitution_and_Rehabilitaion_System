<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
class foodcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $food = Food::all();
        return view('foods.index', [
            'food' => $food
        ]);
    }
    public  function create()

    {
        return view('foods.create');
    }
    public function details($name)
    {
        $food = Food::findORFail($name);
        return view('foods.details', [
            'food' => $food
        ]);
    }
    public function store()
    {
        $food = new Food();
        $food->name = request('name');
        $food->quantity = request('quantity');
        $food->type = request('type');
        $food->price = request('price');
        $check = Food::all();
        $x = 0;
        foreach($check as $temp)
       {
       if($food->name==$temp->name) {
            $x = $food->name; 
        }   
    }
    if($x)
        return redirect('/')->with('msg', 'Sorry the food is already exist');
        else
        {
            $food->save();
            return redirect('/')->with('mssg','You have sucessfully added the food');
        }
        
    }
    public function distroy($id)
    {
        $food = Food::findOrFail($id);
        $food ->delete();
        return redirect('/')->with('mssg', 'You have sucessfully deleted the food');
    }
}
