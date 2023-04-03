<?php

namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    use App\Models\Responsibility;
    
    class ResponsibilityController extends Controller
    {
        public function __construct()
            {
                $this->middleware('auth');
            }
            public function home() {
                return view('Responsibility.home');
            }
            public function index()
            {
                $responsibility = Responsibility::all();
                return view('Responsibility.index', [
                    'responsibilitys' => $responsibility
                ])->with('msg','');
            }
            public  function create()
        
            {
                return view('Responsibility.create')->with('mssg','')->with('msg','');
            }
            public function show($id)
            {
                $responsibility = Responsibility::findOrFail($id);
                return view('Responsibility.show', [
                    'responsibility' => $responsibility
                ]);
            }
            
            public function distroy($id)
            {
                $responsibility = Responsibility::findOrFail($id);
                $responsibility ->delete();
                $responsibility = Responsibility::all();
                return redirect('/responsibility/seeResponsibility')->with('msg', 'You have sucessfully deleted the food');
            }
            public function store()
            {
                $responsibility = new Responsibility();
                $responsibility->name = request('name');
                $check = Responsibility::all();
                $x = 0;
                foreach($check as $temp)
               {
               if($responsibility->name==$temp->name)
               return view('Responsibility.create')->with('mssg','')->with('msg', 'Sorry the job is already exist');
               }
                    $responsibility->save();
                    return view('Responsibility.create')->with('msg','')->with('mssg','You have sucessfully added the job');
              
               
                
            }
           
    }
    