<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandGivesCrop;
use App\Models\CountProperty;


class LandGivesCropController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
        public function index()
        {
            $landGivesCrop = LandGivesCrop::all();
            return view('LandGivesCrop.index', [
                'landGivesCrops' => $landGivesCrop
            ]);
        }
        public  function create()
    
        {
            return view('LandGivesCrop.create',[
                'id'=>request('id')
            ])->with('msg','')->with('mssg','');
        }
        public function show($id)
        {
            $landGivesCrop = LandGivesCrop::all();
            foreach( $landGivesCrop as $temp)
            if($temp->name == $id || $temp->id == $id)
            return view('LandGivesCrop.show', [
                'landGivesCrop' => $temp
            ]);
        }

        public function distroy($id)
        {
            $landGivesCrop = LandGivesCrop::findOrFail($id);
            $landGivesCrop ->delete();
            return redirect('/landGivesCrop/seeLandGivesCrop')->with('mssg', 'You have sucessfully deleted the food');
        }
        public function store()
        {
            $landGivesCrop = new LandGivesCrop();
            $landGivesCrop->name = request('name');
            $landGivesCrop->this = request('this');
            $landGivesCrop->last = request('last');
            $landGivesCrop->two = request('two');
            $landGivesCrop->land_id = request('land_id');
            $check = LandGivesCrop::all();
            $x = 0;
            $z = $landGivesCrop->land_id;
            foreach($check as $temp)
           {
           if($landGivesCrop->name==$temp->name&& $landGivesCrop->land_id== $temp->land_id)
           $x =1;
           }
           if($x == 1)
                return view('LandGivesCrop.create',[
                    'id'=>request('land_id'),
                ])->with('msg','Sorry the plant is already counted ')->with('mssg','');
       
           else{
                $landGivesCrop->save();
                return view('LandGivesCrop.create',[
                    'id'=>request('land_id'),
                ])->with('mssg','You have sucessfully added the counted Plant')->with('msg',"");
              }
            
        }
       
}


