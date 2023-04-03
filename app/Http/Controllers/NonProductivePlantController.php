<?php

namespace App\Http\Controllers;


    
    use Illuminate\Http\Request;
    use App\Models\NonProductivePlant;
    
    class NonProductivePlantController extends Controller
    {
        public function __construct()
            {
                $this->middleware('auth');
            }
            public function home(){
                return view('NonProductivePlant.home');
            }
              public function index()
            {
                $nonProductivePlant = NonProductivePlant::all();
                return view('NonProductivePlant.index', [
                    'nonProductivePlants' => $nonProductivePlant
                ])->with('msg','');
            }
            public  function create()
        
            {
                return view('NonProductivePlant.create')->with('mssg','')->with('msg','');
            }
            public function show($id)
            {
                $nonProductivePlant = NonProductivePlant::all();
                foreach( $nonProductivePlant as $temp)
                if($temp->name == $id || $temp->id = $id)
                return view('NonProductivePlant.show', [
                    'nonProductivePlant' => $temp
                ]);
            }
    
            public function distroy($id)
            {
                $nonProductivePlant = NonProductivePlant::findOrFail($id);
                $nonProductivePlant ->delete();
                $nonProductivePlant = NonProductivePlant::all();
                return view('NonProductivePlant.index', [
                    'nonProductivePlants' => $nonProductivePlant
                ])->with('msg', 'You have sucessfully deleted the food');
            }
            public function store()
            {
                $nonProductivePlant = new NonProductivePlant();
                $nonProductivePlant->name = request('name');
                $nonProductivePlant->price = request('price');
                $check = NonProductivePlant::all();
                $x = 0;
                foreach($check as $temp)
               {
               if($nonProductivePlant->name==$temp->name)
               $x = 1;
               }
               if($x == 1)
               return view('NonProductivePlant.create')->with('mssg','')->with('msg', 'Sorry the Plant  is already exist');
               else{
                    $nonProductivePlant->save();
                    return view('NonProductivePlant.create')->with('msg','')->with('mssg','You have sucessfully added the Plant');
              }
               
                
            }
           
    }
    