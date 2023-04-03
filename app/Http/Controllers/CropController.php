<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crop;

class CropController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
        public function home() {
            return view('Crop.home');
        }

        public function index()
        {
            $crop = Crop::all();
            return view('Crop.index', [
                'crops' => $crop,
                'msg'=>""
            ]);
        }
        public  function create()
    
        {
            return view('Crop.create')->with('mssg','')->with('msg','');
        }
        public function show($id)
        {
            $crop = Crop::findOrFail($id);
            return view('Crop.show', [
                'crop' => $crop
            ]);
        }

        public function distroy($id)
        {
            $crop = Crop::findOrFail($id);
            $crop ->delete();
            $crop = Crop::all();
            return view('Crop.index', [
                'crops' => $crop,
                'msg'=>"You have sucessfully deleted the crop"
            ]);
        }
        public function store()
        {
            $crop = new Crop();
            $crop->name = request('name');
            $crop->price = request('price');
            $check = Crop::all();
            $x = 0;
            foreach($check as $temp)
           {
           if($crop->name==$temp->name)
           $x =1;
           }
           if($x == 1)
            return view('Crop.create')->with('msg', 'Sorry the crop is already exist')->with('mssg','');
           else{
                $crop->save();
                return view('Crop.create')->with('mssg','You have sucessfully added the crop')->with('msg','');
          }
           
            
        }
       
}
