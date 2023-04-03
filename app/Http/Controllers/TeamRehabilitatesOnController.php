<?php

namespace App\Http\Controllers;
       
            use Illuminate\Http\Request;
            use App\Models\TeamRehabilitatesOn;
            
            class TeamRehabilitatesOnController extends Controller
            {
                public function __construct()
                    {
                        $this->middleware('auth');
                    }
                    public function home(){
                        return view('TeamRehabilitatesOn.home');
                    }
                    public function index()
                    {
                        $TeamRehabilitatesOn = TeamRehabilitatesOn::all();
                        return view('TeamRehabilitatesOn.index', [
                            'TeamRehabilitatesOns' => $TeamRehabilitatesOn
                        ]);
                    }
                    public  function create()
                
                    {
                        return view('TeamRehabilitatesOn.create');
                    }
                    public function show($id)
                    {
                        $TeamRehabilitatesOn = TeamRehabilitatesOn::findOrFail($id);
                        return view('TeamRehabilitatesOn.show', [
                            'TeamRehabilitatesOn' => $TeamRehabilitatesOn
                        ]);
                    }
            
                    public function distroy($id)
                    {
                        $TeamRehabilitatesOn = TeamRehabilitatesOn::findOrFail($id);
                        $TeamRehabilitatesOn ->delete();
                        return redirect('/')->with('mssg', 'You have sucessfully deleted the food');
                    }
                    public function store()
                    {
                        $TeamRehabilitatesOn = new TeamRehabilitatesOn();
                        $TeamRehabilitatesOn->team = request('team');
                        $TeamRehabilitatesOn->land_owner_id = request('land_owner_id');
                        $TeamRehabilitatesOn->budget = request('budget');
                        $TeamRehabilitatesOn->expert = request('expert');
                        $TeamRehabilitatesOn->responsibility = request('responsibility');
                        $check = TeamRehabilitatesOn::all();
                        $x = 0;
                        foreach($check as $temp)
                       {
                       if($TeamRehabilitatesOn->team==$temp->team && $temp->land_owner_id == $temp->land_owner_id)
                       $x =1;
                       }
                       if($x)
                        return redirect('/')->with('mssg', 'Sorry the food is already exist');
                       else{
                            $TeamRehabilitatesOn->save();
                            return redirect('/')->with('mssg','You have sucessfully added the food');
                      }
                       
                        
                    }
                   
            }
            
