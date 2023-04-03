<?php

namespace App\Http\Controllers;
    
        use Illuminate\Http\Request;
        
        use App\Models\RPRDirectorate;
        
        class RPRDirectorateController extends Controller
        {
            public function __construct()
                {
                    $this->middleware('auth');
                }
                public function home() {
                    return view('RPRDirectorate.home');
                }
                public function index()
                {
                    $RPRDirectorate = RPRDirectorate::all();
                    return view('RPRDirectorate.index', [
                        'RPRDirectorates' => $RPRDirectorate
                    ]);
                }
                public  function create()
            
                {
                    return view('RPRDirectorate.create');
                }
                public function show($id)
                {
                    $RPRDirectorate = RPRDirectorate::findOrFail($id);
                    return view('RPRDirectorate.show', [
                        'RPRDirectorate' => $RPRDirectorate
                    ]);
                }
        
                public function distroy($id)
                {
                    $RPRDirectorate = RPRDirectorate::findOrFail($id);
                    $RPRDirectorate ->delete();
                    return redirect('/')->with('mssg', 'You have sucessfully deleted the food');
                }
                public function store()
                {
                    $RPRDirectorate = new RPRDirectorate();
                    $RPRDirectorate->name = request('name');
                    $RPRDirectorate->email = request('email');
                    $RPRDirectorate->phone = request('phone');
                    $check = RPRDirectorate::all();
                    $x = 0;
                    foreach($check as $temp)
                   {
                   if($RPRDirectorate->name==$temp->name)
                   $x =1;
                   }
                   if($x)
                    return redirect('/')->with('mssg', 'Sorry the food is already exist');
                   else{
                        $RPRDirectorate->save();
                        return redirect('/')->with('mssg','You have sucessfully added the food');
                  }
                   
                    
                }
               
        }
        