<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function employee()
    {
        return view("Employee");
        # code...
    }
    public function rehabilitation()
    {
        # code...
        return view("rehabilitation");
    }

    #crate function to route property rlated request
    public function property(){
        return view("property");
    }
    public function major_activities(){
        return view("major");
    }
}
