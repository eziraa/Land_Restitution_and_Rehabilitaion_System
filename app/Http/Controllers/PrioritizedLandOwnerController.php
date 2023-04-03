<?php

namespace App\Http\Controllers;
 
        use Illuminate\Http\Request;
        
            use App\Models\PrioritizedLandOwner;
            
            class PrioritizedLandOwnerController extends Controller
            {
                public function __construct()
                    {
                        $this->middleware('auth');
                    }
                    public function index()
                    {
                        $PrioritizedLandOwner = PrioritizedLandOwner::all();
                        return view('PrioritizedLandOwner.index', [
                            'PrioritizedLandOwners' => $PrioritizedLandOwner
                        ])->with('msg','');
                    }
                    
                    public function home(){
                        return view("PrioritizedLandOwner.home");
                    }
                    public  function create()
                
                    {
                        return view('PrioritizedLandOwner.create')->with('mssg','')->with("msg",'');
                    }
                    public function show($id)
                    {
                        $PrioritizedLandOwner = PrioritizedLandOwner::findOrFail($id);
                        return view('PrioritizedLandOwner.show', [
                            'PrioritizedLandOwner' => $PrioritizedLandOwner
                        ]);
                    }
            
                    public function distroy($id)
                    {
                        $PrioritizedLandOwner = PrioritizedLandOwner::findOrFail($id);
                        $PrioritizedLandOwner ->delete();
                        $PrioritizedLandOwner = PrioritizedLandOwner::all();
                        return view('PrioritizedLandOwner.index', [
                            'PrioritizedLandOwners' => $PrioritizedLandOwner
                        ])->with('msg', 'You have sucessfully deleted the food');
                    }
                    public function store()
                    {
                        $PrioritizedLandOwner = new PrioritizedLandOwner();
                        $PrioritizedLandOwner->land_owner_id = request('land_owner_id');
                        $PrioritizedLandOwner->area = request('area');
                        $PrioritizedLandOwner->responsibility = request('responsibility');
                        $check = PrioritizedLandOwner::all();
                        $x = 0;
                        foreach($check as $temp)
                       {
                       if( $PrioritizedLandOwner->land_owner_id == $temp->land_owner_id)
                       return view('PrioritizedLandOwner.create')->with('msg', 'Sorry the land Owner is already exist')->with('mssg','');
                       }
                            $PrioritizedLandOwner->save();
                            return view('PrioritizedLandOwner.create')->with('msg','')->with('mssg','You have sucessfully added the Land Owner');
                    }
                   
            }
            
        