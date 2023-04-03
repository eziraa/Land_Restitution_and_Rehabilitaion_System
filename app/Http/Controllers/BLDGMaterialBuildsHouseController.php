<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BLDGMaterialBuildsHouse;
;

    
    class BLDGMaterialBuildsHouseController extends Controller
    {
        public function __construct()
            {
                $this->middleware('auth');
            }
            public function index()
            {
                $BLDGMaterialBuildsHouse = BLDGMaterialBuildsHouse::all();
                return view('BLDGMaterialBuildsHouse.index', [
                    'BLDGMaterials' => $BLDGMaterialBuildsHouse
                ])->with('msg','');
            }
            public  function create()
        
            {
                return view('BLDGMaterialBuildsHouse.create',[
                    'land_id'=>'',
                    'house_id'=>''
                ])->with('mssg','')->with('msg','');
            }
            public function show($id)
            {
                $BLDGMaterialBuildsHouse = BLDGMaterialBuildsHouse::findOrFail($id);
                return view('BLDGMaterialBuildsHouse.show', [
                    'BLDGMaterial' => $BLDGMaterialBuildsHouse
                ]);
            }
    
            public function distroy($id)
            {
                $BLDGMaterialBuildsHouse = BLDGMaterialBuildsHouse::findOrFail($id);
                $BLDGMaterialBuildsHouse ->delete();
                $BLDGMaterialBuildsHous = BLDGMaterialBuildsHouse::all();
                return view('BLDGMaterialBuildsHouse.index', [
                    'BLDGMaterials' => $BLDGMaterialBuildsHous
                ])->with('msg', 'You have sucessfully deleted the Material');
                // return redirect('/')->with('mssg', 'You have sucessfully deleted the food');
            }
            public function store()
            {
                $BLDGMaterialBuildsHouse = new BLDGMaterialBuildsHouse();
                $BLDGMaterialBuildsHouse->name = request('name');
                $BLDGMaterialBuildsHouse->quantity = request('quantity');
                $BLDGMaterialBuildsHouse->house_id = request('house_id');
                $check = BLDGMaterialBuildsHouse::all();
                $x = 0;
                foreach($check as $temp)
               {
               if($BLDGMaterialBuildsHouse->name==$temp->name && $BLDGMaterialBuildsHouse->house_id == $temp->house_id)
               $x =1;
               }
               if($x == 1)
               return view('BLDGMaterialBuildsHouse.create',[
                'land_id'=>request('land_id'),
                'house_id'=>$BLDGMaterialBuildsHouse->house_id
                 ])->with('msg','Sorry the Building material ia already exist')->with('mssg','');
            
                 else{
                    $BLDGMaterialBuildsHouse->save();
                    return view('BLDGMaterialBuildsHouse.create',[
                        'land_id'=>request('land_id'),
                        'house_id'=>request('house_id')
                    ])->with('mssg','You have sucessfully added the house')->with('msg','');
                    }
               
                
            }
           
    }
    