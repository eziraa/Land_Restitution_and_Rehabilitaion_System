<?php

namespace App\Http\Controllers;


use App\Models\ProReqToLand;
use App\Models\Notification;
use App\Models\Land;
use App\Models\LandOwner;
                    
                    class NotifierController extends Controller
                    {
                        public function __construct()
                        {
                            $this->middleware('auth');
                        }
                        public function home()
                        {
                            return view('Notifier.home');
                        }
                        public  function answer($id)     
                        {

                            // $request = ProReqToLand::findOrFail($id);
                            // $land = Land::all()->where('sub_kebele',$request->sub_kebele);
                            // $notification = new Notification();
                            // return view('Notification.create',[
                            //     'project'=>$request->
                            // ]);
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
                            return redirect('/')->with('mssg', 'Sorry the food is already exist');
                           else{
                                $PaymentCheck->save();
                                return redirect('/')->with('mssg','You have sucessfully added the food');
                        }
                        
                            
                        }
                           
                    }
                    
        