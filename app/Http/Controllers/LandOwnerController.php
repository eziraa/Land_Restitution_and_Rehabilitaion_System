<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandOwner;

class LandOwnerController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
        public function home() {
            return view('LandOwner.home');
        }
        public function index()
        {
            $landOwner = LandOwner::all();
            return view('LandOwner.index', [
                'landOwners' => $landOwner
            ])->with('msg','');
        }
        public  function create()
    
        {
            return view('LandOwner.create')->with('mssg','')->with('msg','');
        }
        public function show($id)
        {
            $landOwnr = LandOwner::findOrFail($id);
            return view('LandOwner.show', [
                'landOwner' => $landOwnr
            ]);
        }

        public function distroy($id)
        {
            $landOwner = LandOwner::findOrFail($id);
            $landOwner ->delete();

           $landOwner = LandOwner::all();
            return view('LandOwner.index', [
                'landOwners' => $landOwner
            ])->with('msg','You have sucessfully deleted the Land Owner');
        }
        public function store()
        {
            $landOwner = new LandOwner();
            $landOwner->name = request('name');
            $landOwner->gender = request('gender');
            $landOwner->age = request('age');
            $landOwner->phone_number = request('phone_number');
            $landOwner->sub_kebele = request('sub_kebele');
            $check = LandOwner::all();
        //     $x = 0;
        //     foreach($check as $temp)
        //    {
        //    if($landOwner->subKebele==$temp->subKebele)
        //     return redirect('/')->with('msg', 'Sorry the food is already exist');
        //    else{
                $landOwner->save();
                return view('LandOwner.create')->with('msg','')->with('mssg','You have sucessfully added the Land owner');
          // }
          //  }
            
        }
       
}
