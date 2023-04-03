<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    use App\Models\InterestRequest;
    
    class InterestRequestController extends Controller
    {
        public function __construct()
            {
                $this->middleware('auth');
            }
            public function index()
            {
                $InterestRequest = InterestRequest::all();
                return view('InterestRequest.index', [
                    'InterestRequests' => $InterestRequest
                ]);
            }
            public function home(){
                return view("InterestController.home");
            }
            public  function create()
        
            {
                return view('InterestRequest.create');
            }
            public function show($id)
            {
                $InterestRequest = InterestRequest::findOrFail($id);
                return view('InterestRequest.show', [
                    'InterestRequest' => $InterestRequest
                ]);
            }
    
            public function distroy($id)
            {
                $InterestRequest = InterestRequest::findOrFail($id);
                $InterestRequest ->delete();
                return redirect('/')->with('mssg', 'You have sucessfully deleted the food');
            }
            public function store()
            {
                $InterestRequest = new InterestRequest();
                $InterestRequest->name = request('name');
                $InterestRequest->responsibility = request('responsibility');
                $InterestRequest->land_owner_id = request('land_owner_id');
                $check = InterestRequest::all();
                $x = 0;
                foreach($check as $temp)
               {
               if($InterestRequest->name==$temp->name)
               $x =1;
               }
               if($x)
                return redirect('/')->with('mssg', 'Sorry the food is already exist');
               else{
                    $InterestRequest->save();
                    return redirect('/')->with('mssg','You have sucessfully added the food');
              }
               
                
            }
           
    }
    
