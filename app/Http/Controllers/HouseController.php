<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\BLDGMaterialBuildsHouse;

    class HouseController extends Controller
    {
        public function __construct()
            {
                $this->middleware('auth');
            }
            public function index()
            {
                $house = House::all();
                return view('House.index', [
                    'houses' => $house
                ])->with("mssg","");
            }
            public  function create()
        
            {
                $house = House::all();
                $index = 0;
                foreach ($house as $temp)
                    $index = $temp->id + 1;
                return view('House.create',[
                    'id'=>request('id'),
                    'house_id'=> $index
                ])->with('mssg','')->with('msg','');
            }
            public function show($id)
            {
                $house = House::findORFail($id);
                return view('House.show', [
                    'house' => $house
                ]);
            }
    
            public function find($id)
            {
                $house = House::all();
                foreach($house as $add){
                    if($add->subKebele == $id)
                    return view('House.show', [
                        'house' => $add
                    ]);
                }
                
            }
            public function store()
            {
                $house = new House();
                $house->numberOf = request('numberOf');
                $house->labourCost = request('labourCost');
                $house->land_id = request('land_id');
                // $index = 0;
                // foreach ($temp1 as $temp)
                //     $index = $temp->id + 1;
                    $house->save();
                    $temp1 = House::all();
                    foreach ($temp1 as $temp)
                    $index = $temp->id;
                    return view('BLDGMaterialBuildsHouse.create',[
                        'land_id'=>request('land_id'),
                        'house_id'=>$index
                    ])->with('mssg','You have sucessfully added the house')->with('msg','');
                
            }
            public function distroy($id)
            {
                $house = House::findOrFail($id);
                $house ->delete();
                return view('House.index',[
                    'houses'=>House::all()
                ])->with('mssg', 'You have sucessfully deleted the House');
            }
    }
    