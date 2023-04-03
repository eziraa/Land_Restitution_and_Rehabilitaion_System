<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Land;
use App\Models\LandOwner;

class LandController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
        public function home() {
            return view('Land.home');
        }
        public function index()
        {
            $land = Land::all();
            return view('Land.index', [
                'lands' => $land
            ])->with('msg','');
        }
        public  function create()
    
        {
            return view('Land.create')->with('mssg','')->with('msg','');
        }
        public function show($id)
        {
            $land = Land::findOrFail($id);
            // foreach($land as $temp)
            // if($temp->id = $id)
            return view('Land.show', [
                'land' => $land
            ]);
        }

        public function distroy($id)
        {
            $land = Land::findOrFail($id);
            $land ->delete();
            $land = Land::all();
            return view('Land.index', [
                'lands' => $land
            ])->with('msg','You have succesfully deleted the land');      }
        public function store()
        {
            $land = new Land();
            $land->type = request('type');
            $land->use = request('use');
            $land->area = request('area');
            $land->landOwner_id = request('landOwner_id');
            $land->sub_kebele = request('sub_kebele');
            $check = LandOwner::all();
            $x = 0;
            foreach($check as $temp)
           {
           if($land->landOwner_id==$temp->id)
           $x = 1;
           }
           if($x == 0)
            return view('Land.create')->with('msg', 'Sorry landowner does not exist')->with('mssg','');
           else{
                $land->save();
                return view('Land.create')->with('mssg','You have succesfully added the land ')->with('msg','');
          }
            
        }
        public function seeLand(){
            $sub = request('sub_kebele');
            $land = Land::all()->where('sub_kebele',$sub);
           
            return view('Land.index',[
                'lands'=>$land
            ])->with("msg",'');
           
        }
       
}
