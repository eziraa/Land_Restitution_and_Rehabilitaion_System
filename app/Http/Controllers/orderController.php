<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Food;
class orderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $order = Order::latest()->get();
        return view('orders.index', [
            'order' => $order
        ]);
    }
    public  function create($id)

    {
        $food = Food::findOrFail($id);
        return view('orders.create')->with('order',$food);
    }
    public  function createb($id)

    {
        $order = Order::findOrFail($id);
        return view('orders.createb')->with('order',$order);
    }
    public  function order($name)

    {
        $food = Food::findOrFail($name);
        return view('orders.create')->with('order',$food);
    }
    public function details($id)
    {
        $order = Order::findORFail($id);
        return view('orders.show', [
            'order' => $order
        ]);
    }
    public function store()
    {
        $order = new Order();
        $order->customerName = request('name');
        $order->foodName = request('type');
        $order->quantity = request('quantity');
        $order->save();
        return redirect('/')->with('mssg','You have sucessfully ordered wait a minute');
    }
    public function distroy($id)
    {
        $order = Order::findOrFail($id);
        $order ->delete();
        return redirect('/')->with('mssg', 'You have sucessfully deleted the order');
    }
}
