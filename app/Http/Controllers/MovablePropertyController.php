<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use App\Models\MovableProperty;
    
    class MovablePropertyController extends Controller
    {
        public function __construct()
            {
                $this->middleware('auth');
            }
            public function index()
            {
                $movableProperty = MovableProperty::all();
                return view('MovableProperty.index', [
                    'movablePropertys' => $movableProperty
                ])->with('msg',"You have succefully deleted");
            }
            public  function create()
        
            {
                return view('MovableProperty.create',[
                    'id'=>request('id')
                ])->with('mssg','')->with('msg','');
            }
            public function show($id)
            {
                $movableProperty = MovableProperty::findOrFail($id);
                return view('MovableProperty.show', [
                    'movableProperty' => $movableProperty
                ]);
            }
    
            public function distroy($id)
            {
                $movableProperty = MovableProperty::findOrFail($id);
                $movableProperty ->delete();
                return view('MovableProperty.index',[
                    'movablePropertys' => MovableProperty::all()
                ])->with('mssg', 'You have sucessfully deleted the food');
            }
            public function store()
            {
                $movableProperty = new MovableProperty();
                $movableProperty->name = request('name');
                $movableProperty->uprooting = request('uprooting');
                $movableProperty->transport = request('transport');
                $movableProperty->installing = request('installing');
                $movableProperty->recovery = request('recovery');
                $movableProperty->land_id = request('land_id');
                $check = MovableProperty::all();
                $x = 0;
                foreach($check as $temp)
               {
               if($movableProperty->name==$temp->name&& $movableProperty->land_id== $temp->land_id)
               $x =1;
               }
               if($x == 1)
               return view('MovableProperty.create',[
                'id'=>request('land_id')
            ])->with('mssg','')->with('msg','Sorry the Property is already exist');
               else{
                    $movableProperty->save();
                    return view('MovableProperty.create',[
                        'id'=>request('land_id')
                    ])->with('mssg','You have sucessfully added the Property')->with('msg','');
              }
                
            }
           
    }
    
    
    