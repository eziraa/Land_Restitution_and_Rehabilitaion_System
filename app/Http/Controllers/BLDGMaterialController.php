<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BLDGMaterial;


class BLDGMaterialController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
        public function home() {
            return view('BLDGMaterial.home');
        }
        public function index()
        {
            $BLDGMaterial = BLDGMaterial::all();
            return view('BLDGMaterial.index', [
                'BLDGMaterials' => $BLDGMaterial
            ])->with('msg','');
        }
        public  function create()
    
        {
            return view('BLDGMaterial.create')->with('mssg','')->with('msg','');
        }
        public function show($id)
        {
            $BLDGMaterial = BLDGMaterial::findOrFail($id);
            return view('BLDGMaterial.show', [
                'BLDGMaterial' => $BLDGMaterial
            ]);
        }
        
        public function find($id)
        {
            $BLDGMaterial = BLDGMaterial::all()->where('name',$id);
            return view('BLDGMaterial.show', [
                'BLDGMaterial' => $BLDGMaterial
            ]);
        }

        public function distroy($id)
        {
            $BLDGMaterial = BLDGMaterial::findOrFail($id);
            $BLDGMaterial ->delete();
            $BLDGMaterial = BLDGMaterial::all();
            return view('BLDGMaterial.index', [
                'BLDGMaterials' => $BLDGMaterial
            ])->with('msg', 'You have sucessfully deleted the food');
        }
        public function store()
        {
            $BLDGMaterial = new BLDGMaterial();
            $BLDGMaterial->name = request('name');
            $BLDGMaterial->price = request('price');
            $check = BLDGMaterial::all();
            $x = 0;
            foreach($check as $temp)
           {
           if($BLDGMaterial->name==$temp->name)
           $x =1;
           }
           if($x == 1)
           return view('BLDGMaterial.create')->with('mssg','')->with('msg', 'Sorry the Building material is already exist');
           else{
                $BLDGMaterial->save();
                return view('BLDGMaterial.create')->with('msg','')->with('mssg','You have sucessfully added the Building material');
          }
           
            
        }
       
}
