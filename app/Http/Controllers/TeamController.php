<?php

namespace App\Http\Controllers;
        
        use Illuminate\Http\Request;
        use App\Models\Team;
        
        class TeamController extends Controller
        {
            public function __construct()
                {
                    $this->middleware('auth');
                }
                public function home(){
                    return view('Team.home');
                }
                public function index()
                {
                    $Team = Team::all();
                    return view('Team.index', [
                        'Teams' => $Team
                    ]);
                }
                public  function create()
            
                {
                    return view('Team.create');
                }
                public function show($id)
                {
                    $Team = Team::findOrFail($id);
                    return view('Team.show', [
                        'Team' => $Team
                    ]);
                }
        
                public function distroy($id)
                {
                    $Team = Team::findOrFail($id);
                    $Team ->delete();
                    return redirect('/')->with('mssg', 'You have sucessfully deleted the food');
                }
                public function store()
                {
                    $Team = new Team();
                    $Team->team = request('team');
                    $Team->number = request('number');
                    $check = Team::all();
                    $x = 0;
                    foreach($check as $temp)
                   {
                   if($Team->Team==$temp->Team)
                   $x =1;
                   }
                   if($x)
                    return redirect('/')->with('mssg', 'Sorry the food is already exist');
                   else{
                        $Team->save();
                        return redirect('/')->with('mssg','You have sucessfully added the food');
                  }
                   
                    
                }
               
        }
        