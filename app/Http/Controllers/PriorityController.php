<?php

namespace App\Http\Controllers;

    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
        use App\Models\Priority;
        
        class PriorityController extends Controller
        {
            public function __construct()
                {
                    $this->middleware('auth');
                }
                public function index()
                {
                    $Priority = Priority::all();
                    return view('Priority.index', [
                        'Prioritys' => $Priority
                    ]);
                }
                public function home(){
                    return view("Priority.home");
                }
                public  function create()
            
                {
                    return view('Priority.create');
                }
                public function show($id)
                {
                    $Priority = Priority::findOrFail($id);
                    return view('Priority.show', [
                        'Priority' => $Priority
                    ]);
                }
        
                public function distroy($id)
                {
                    $Priority = Priority::findOrFail($id);
                    $Priority ->delete();
                    return redirect('/')->with('mssg', 'You have sucessfully deleted the food');
                }
                public function store()
                {
                    $Priority = new Priority();
                    $Priority->reason = request('reason');
                    $Priority->area = request('area');
                    $Priority->desability = request('desability');
                    $Priority->land_owner_id = request('land_owner_id');
                    $check = Priority::all();
                    $x = 0;
                    foreach($check as $temp)
                   {
                   if($Priority->name==$temp->name && $Priority->land_owner_id == $temp->land_Owner_id)
                   $x =1;
                   }
                   if($x)
                    return redirect('/')->with('mssg', 'Sorry the food is already exist');
                   else{
                        $Priority->save();
                        return redirect('/')->with('mssg','You have sucessfully added the food');
                  }
                   
                    
                }
               
        }
        
    