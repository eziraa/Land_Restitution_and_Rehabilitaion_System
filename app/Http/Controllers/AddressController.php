<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\DB;


class AddressController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
        public function home(){
            return view('Address.home');
        }
        public function index()
        {
            // $address = DB::select(DB::raw("SELECT * FROM address "));
            // $address = DB::table('address')
            // ->select('region','zone','wereda','kebele','subKebele');
            // ->where('active', '=', 1)
            // ->orderBy('name', 'asc')
            // ->get();

           $address = Address::all();
            return view('Address.index', [
                'addresss' => $address
            ]);
        }
        public  function create()
    
        {
            return view('Address.create');
        }
        public function show($id)
        {
            $address = Address::all();
            foreach($address as $add){
                if($add->subKebele == $id || $add->id == $id)
                return view('Address.show', [
                    'address' => $add
                ]);
            }
        }

        public function find($id)
        {
            $address = Address::all();
            foreach($address as $add){
                if($add->subKebele == $id)
                return view('Address.show', [
                    'address' => $add
                ]);
            }
            
        }
        public function store()
        {
            $address = new Address();
            $address->region = request('region');
            $address->zone = request('zone');
            $address->wereda = request('wereda');
            $address->kebele = request('kebele');
            $address->subKebele = request('subKebele');
            $check = Address::all();
            $x = 0;
            foreach($check as $temp)
           {
           if($address->subKebele == $temp->subKebele)
            return redirect('/address/addAddress')->with('msg', 'Sorry the address is already exist');
           }
                $address->save();
                return redirect('/address/addAddress')->with('mssg','You have sucessfully added the address');
        }
        public function distroy($id)
        {
            $address = Address::findOrFail($id);
            $address ->delete();
            return redirect('/address/seeAddress')->with('msg', 'You have sucessfully deleted the address');
        }
}
