<?php

namespace App\Http\Controllers;
                  
    use Illuminate\Http\Request;
    
    use App\Models\ProPaysToLandOwner;
    
    class ProPaysToLandOwnerController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth');
                    }
                
                    public function home(){
                        return view('ProPaysToLandOwner.home');
                    }
                    public function index()
                    {
                        $ProPaysToLandOwner = ProPaysToLandOwner::all();
                        return view('ProPaysToLandOwner.index', [
                            'ProPaysToLandOwners' => $ProPaysToLandOwner
                        ]);
                    }
                    public  function create()
                            
                    {
                        return view('ProPaysToLandOwner.create');
                    }
                    public function show($id)
                    {
                        $ProPaysToLandOwner = ProPaysToLandOwner::findOrFail($id);
                        return view('ProPaysToLandOwner.show', [
                            'ProPaysToLandOwner' => $ProPaysToLandOwner
                        ]);
                    }
                        
                    public function distroy($id)
                    {
                        $ProPaysToLandOwner = ProPaysToLandOwner::findOrFail($id);
                        $ProPaysToLandOwner ->delete();
                        return redirect('/')->with('mssg', 'You have sucessfully deleted the food');
                    }
                    public function store()
                    {
                        $ProPaysToLandOwner = new ProPaysToLandOwner();
                        $ProPaysToLandOwner->project = request('project');
                        $ProPaysToLandOwner->amount = request('amount');
                        $ProPaysToLandOwner->land_owner_id = request('land_owner_id');
                        $check = ProPaysToLandOwner::all();
                        $x = 0;
                        foreach($check as $temp)
                       {
                       if($ProPaysToLandOwner->project==$temp->project && $ProPaysToLandOwner->land_owner_id==$temp->land_owner_id)
                       $x =1;
                       }
                       if($x)
                        return redirect('/')->with('mssg', 'Sorry the food is already exist');
                       else{
                            $ProPaysToLandOwner->save();
                            return redirect('/')->with('mssg','You have sucessfully added the food');
                    }
                    
                        
                    }
                       
                }
                
    