<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamilyMember;

class FamilyMemberController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
        public function home() {
            return view('FamilyMember.home');
        }
        public function index()
        {
            $familyMember = FamilyMember::all();
            return view('FamilyMember.index', [
                'familyMembers' => $familyMember
            ])->with('msg','');
        }
        public  function create()
    
        {
            return view('FamilyMember.create')->with('msg' ,'' )->with('mssg','');
        }
        public function show($id)
        {
            $familyMember = FamilyMember::findOrFail($id);
            return view('FamilyMember.show', [
                'familyMember' => $familyMember
            ]);
        }

        public function distroy($id)
        {
            $familyMember = FamilyMember::findOrFail($id);
            $familyMember ->delete();
            $familyMember = FamilyMember::all();
            return view('FamilyMember.index', [
                'familyMembers' => $familyMember
            ])->with('msg', 'You have sucessfully deleted the food');
        }
        public function store()
        {
            $familyMember = new FamilyMember();
            $familyMember->Name = request('name');
            $familyMember->gender = request('gender');
            $familyMember->age = request('age');
            $familyMember->relation = request('relation');
            $familyMember->phone_number = request('phone_number');
            $familyMember->landOwner_id = request('landOwner_id');
            $check =  FamilyMember::all();
            $x = 0;
            foreach($check as $temp){
           if($familyMember->Name==$temp->Name &&  $familyMember->landOwner_id ==  $temp->landOwner_id )
           $x = 1;
            }
           if($x == 1)
           return view('FamilyMember.create')->with('mssg' ,'' )->with('msg', 'Sorry the Family member  is already exist');
           else{
                $familyMember->save();
                return view('FamilyMember.create')->with('msg' ,'' )->with('mssg', 'You have succefully addeded the famliy member');
               }
           
            
        }
       
}
