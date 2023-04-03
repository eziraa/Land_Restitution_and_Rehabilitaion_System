<?php

namespace App\Http\Controllers;
          
        use Illuminate\Http\Request;
        
        use App\Models\CountProperty;
        use App\Models\Notification;
        use App\Models\LandOwner;
        use App\Models\Land;
        
        class CountPropertyController extends Controller
        {
            public function __construct()
            {
                $this->middleware('auth');
            }
            public function select(){
                $project = Notification::select('project')->where('reason','Counting')->groupBy('project')->get();
                return view('CountProperty.select',[
                    'project'=>$project
                ]);
            }
            public function index()
            {
                $CountProperty = CountProperty::all();
                return view('CountProperty.index', [
                    'CountPropertys' => $CountProperty
                ])->with('mssg','')->with('msg','');
            }
            public  function create()
                    
            {
                return view('CountProperty.create');
            }

            public function find(){
                $project = Notification::all()->where('reason','Counting')->where('project',request('project'));
                $landOwner = LandOwner::all();
                $land = Land::all();
                return view('CountProperty.find',[
                    'landOwner'=>$landOwner,
                    'project'=>$project,
                    'land'=>$land
                ]);

            }
            public function check(){
                $project = Notification::select('project')->where('reason','Counting')->groupBy('project')->get();
                return view('CountProperty.check',[
                    'project'=>$project
                ]);
            }
            public function  featch(){
                $project = Notification::all()->where('reason','Counting');
                $landOwner = LandOwner::all();
                return view ('CountProperty.featch',[
                    'landOwner'=>$landOwner,
                    'project'=>$project
                ]);
            }
            public function count($id){
                return view('CountProperty.count',[
                    'id'=>$id
                ]);
            }
            public function show($id)
            {
                $CountProperty = CountProperty::findOrFail($id);
                return view('CountProperty.show', [
                    'CountProperty' => $CountProperty
                ]);
            }
                
            public function distroy($id)
            {
                $CountProperty = CountProperty::findOrFail($id);
                $CountProperty ->delete();
                return redirect('/CountProperty/seeCountProperty')->with('msg', 'You have sucessfully deleted the record');
            }
            public function store()
            {
                $project = Notification::all()->where('reason','Counting')->where('project',request('project'));
                $landOwner = LandOwner::all();
                $y = 0;
                foreach($project as $tempo)
                foreach($landOwner as $temp){
                if($tempo->land_owner_id == $temp->id){
                $CountProperty = new CountProperty();
                $CountProperty->responsibility = 'Counting Checker';
                $CountProperty->check = request($temp->id);
                $CountProperty->project = request('project');
                $CountProperty->representative_id = 1;
                $CountProperty->land_owner_id = $temp->id;
                $check = CountProperty::all();
                $x = 0;
                foreach($check as $temp1)
               {
               if($CountProperty->project==$temp1->project && $CountProperty->land_owner_id==$temp1->id)
               $x =1;
               }
               if($x == 1)
                ;// return redirect('/')->with('mssg', 'Sorry the food is already exist');
               else{
                $y = 1;
                    $CountProperty->save();
            }
            }
        }
        if($y == 1)
            return view ('CountProperty.featch',[
                'landOwner'=>$landOwner,
                'project'=>$project
            ])->with('msg','Sorry the task is already done')->with('mssg','');
            else
            return view ('CountProperty.featch',[
                'landOwner'=>$landOwner,
                'project'=>$project
            ])->with('mssg','You have succesfully done your task')->with('msg','');
        
                
            }
               
        }
        