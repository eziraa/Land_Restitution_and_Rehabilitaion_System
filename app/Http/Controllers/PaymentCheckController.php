<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
                
                use App\Models\PaymentCheck;
                
                class PaymentCheckController extends Controller
                {
                    public function __construct()
                    {
                        $this->middleware('auth');
                    }
                    public function index()
                    {
                        $PaymentCheck = PaymentCheck::all();
                        return view('PaymentCheck.index', [
                            'PaymentChecks' => $PaymentCheck
                        ]);
                    }
                    public  function create()
                            
                    {
                        return view('PaymentCheck.create');
                    }
                    public function show($id)
                    {
                        $PaymentCheck = PaymentCheck::findOrFail($id);
                        return view('PaymentCheck.show', [
                            'PaymentCheck' => $PaymentCheck
                        ]);
                    }
                        
                    public function distroy($id)
                    {
                        $PaymentCheck = PaymentCheck::findOrFail($id);
                        $PaymentCheck ->delete();
                        return redirect('/')->with('mssg', 'You have sucessfully deleted the food');
                    }
                    public function store()
                    {
                        $PaymentCheck = new PaymentCheck();
                        $PaymentCheck->responsibility = request('responsibility');
                        $PaymentCheck->check = request('check');
                        $PaymentCheck->project = request('project');
                        $PaymentCheck->amount = request('amount');
                        $PaymentCheck->land_owner_id = request('land_owner_id');
                        $check = PaymentCheck::all();
                        $x = 0;
                        foreach($check as $temp)
                       {
                       if($PaymentCheck->project==$temp->project && $PaymentCheck->land_owner_id==$temp->land_owner_id)
                       $x =1;
                       }
                       if($x)
                        return redirect('/')->with('mssg', 'Sorry the record is already exist');
                       else{
                            $PaymentCheck->save();
                            return redirect('/')->with('mssg','You have sucessfully added the record');
                    }
                    
                        
                    }
                       
                }
                
    