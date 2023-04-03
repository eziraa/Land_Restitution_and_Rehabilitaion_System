<?php

namespace App\Http\Controllers;
use App\Models\Project;

  use Illuminate\Http\Request;
            
            use App\Models\ProReqToLand;
            
            class ProReqToLandController extends Controller
            {
                public function __construct()
                    {
                        $this->middleware('auth');
                    }
                    public function index()
                    {
                        $ProReqToLand = ProReqToLand::all();
                        return view('ProReqToLand.index', [
                            'ProReqToLands' => $ProReqToLand
                        ]);
                    }
                    public  function create()
                
                    {
                        return view('ProReqToLand.create');
                    }
                    public function show($id)
                    {
                        $ProReqToLand = ProReqToLand::findOrFail($id);
                        return view('ProReqToLand.show', [
                            'ProReqToLand' => $ProReqToLand
                        ]);
                    }
            
                    public function distroy($id)
                    {
                        $ProReqToLand = ProReqToLand::findOrFail($id);
                        $ProReqToLand ->delete();
                        return redirect('/')->with('mssg', 'You have sucessfully deleted the food');
                    }
                    public function store()
                    {
                        $ProReqToLand = new ProReqToLand();
                        $ProReqToLand->responsibility = request('responsibility');
                        $ProReqToLand->urgency = request('urgency');
                        $ProReqToLand->recover = request('recover');
                        $ProReqToLand->duration = request('duration');
                        $ProReqToLand->area = request('area');
                        $ProReqToLand->project = request('project');
                        $ProReqToLand->sub_kebele = request('sub_kebele');
                        $Project = new Project();
                        $Project->name = $ProReqToLand->project;
                        $Project->type = request('goverment');
                        $check = Project::all();
                        $x = 0;
                        foreach($check as $temp)
                       {
                       if($Project->name==$temp->name)
                       $x =1;
                       }
                       if($x){
                       $ProReqToLand->save();
                        return redirect('/ProReqToLand/ProReqToLand')->with('mssg', 'You have sucessfully make the request');
                       }
                        else{
                            $Project->save();
                            $ProReqToLand->save();
                            return redirect('/ProReqToLand/ProReqToLand')->with('mssg','You have sucessfully made the request');
                      }
                       
                        
                    }
                   
            }
            