<?php

namespace App\Http\Controllers;

                  
    use Illuminate\Http\Request;
    
    use App\Models\TotalCompensation;
    use App\Models\Estimation;
    
    class TotalCompensationController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth');
                    }
                    public function index()
                    {
                        $TotalCompensation = TotalCompensation::all();
                        return view('TotalCompensation.index', [
                            'TotalCompensations' => $TotalCompensation
                        ]);
                    }
                    public function verify(){
                       $project =  Estimation::select('project')->groupBy('project')->get();
                        return view('TotalCompensation.create',['project'=>$project]);
                    }
                    public  function create()
                            
                    {
                        return view('TotalCompensation.create');
                    }
                    public function show($id)
                    {
                        $TotalCompensation = TotalCompensation::findOrFail($id);
                        return view('TotalCompensation.show', [
                            'TotalCompensation' => $TotalCompensation
                        ]);
                    }
                        
                    public function distroy($id)
                    {
                        $TotalCompensation = TotalCompensation::findOrFail($id);
                        $TotalCompensation ->delete();
                        $TotalCompensation = TotalCompensation::all();
                        return view('TotalCompensation.index', [
                            'TotalCompensations' => $TotalCompensation
                        ]);                    }
                    public function store()
                    {
                        $Estimation = Estimation::all()->where('project',request('project'));
                        foreach ($Estimation as $temp){
                        $TotalCompensation = new TotalCompensation();
                        $TotalCompensation->project = request('project');
                        $TotalCompensation->amount = $temp->amount;
                        $TotalCompensation->land_owner_id = $temp->land_owner_id;
                        $check = TotalCompensation::all();
                        $x = 0;
                        foreach($check as $temp)
                       {
                       if($TotalCompensation->project==$temp->project && $TotalCompensation->land_owner_id==$temp->land_owner_id)
                       $x =1;
                       }
                       if($x == 1)
;
                       else{
                            $TotalCompensation->save();
                    }
                }
                $TotalCompensation = TotalCompensation::all();
                        return view('TotalCompensation.index', [
                            'TotalCompensations' => $TotalCompensation
                        ]);   
                    }
                       
                }
                
    