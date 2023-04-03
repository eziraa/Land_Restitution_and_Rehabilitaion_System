<?php

namespace App\Http\Controllers;
          
        use Illuminate\Http\Request;
        
        use App\Models\MinuteDocument;
        use App\Models\Notification;
        use App\Models\ProReqToLand;
        use App\Models\LandOwner;

        
        class MinuteDocumentController extends Controller
        {
            public function __construct()
            {
                $this->middleware('auth');
            }
            public function home(){
                return view('/MinuteDocument.home');
            }

            public function index()
            {
                $MinuteDocument = MinuteDocument::all();
                return view('MinuteDocument.index', [
                    'MinuteDocuments' => $MinuteDocument
                ]);
            }

            public function see(){
                // if(request('reason')== 'Counting')
                $project = Notification::select('project')->where('reason',request('reason'))->groupBy('project')->get();
        // else
        //         $project = Notification::select('project')->where('reason','Discussion')->groupBy('project')->get();
                return view('MinuteDocument.see',[
                    'notification'=>$project,
                    'reason'=>request('reason')
                ]);
            }

            public  function create()
                    
            {
                // $notification = ProReqToLand::all();
                return view('MinuteDocument.create');
            }
            public function show($id)
            {
                $MinuteDocument = MinuteDocument::findOrFail($id);
                return view('MinuteDocument.show', [
                    'MinuteDocument' => $MinuteDocument
                ]);
            }
                
            public function distroy($id)
            {
                $MinuteDocument = MinuteDocument::findOrFail($id);
                $MinuteDocument ->delete();
                return redirect('/MinuteDocument/seeMinuteDocument')->with('msg', 'You have sucessfully deleted the docment list');
            }
            public function find()
            {
                $notification = Notification::all()->where('project',request('project'))->where('reason',request('reason'));
                // $notificationns = $notification::select('project')->where();
                $MinuteDocument =  LandOwner::all();
                return view('MinuteDocument.make',[
                    'notification'=>$notification,
                    'landOwner'=>$MinuteDocument,
                    'reason'=>request('reason')
                ]);
            }
            public function store()
            {
                $notification = Notification::all()->where('project',request('project'))->where('reason',request('reason'));
                
                // return view('MinuteDocument.create',[
                //     'notification'=>$notification
                // ]);
                $y =0;
                foreach($notification as $temp1){
                $MinuteDocument = new MinuteDocument();
                $MinuteDocument->responsibility = 'Minute Document Holder';
                $MinuteDocument->check = request($temp1->land_owner_id);
                $MinuteDocument->project = $temp1->project;
                $MinuteDocument->type = request('reason');
                $MinuteDocument->land_owner_id = $temp1->land_owner_id;
                
               $check = MinuteDocument::all();
                $x = 0;
                foreach($check as $temp)
               {
               if($MinuteDocument->land_owner_id==$temp->land_owner_id &&  $MinuteDocument->type==$temp->type&&  $MinuteDocument->project==$temp->project  )
               $x =1;
               }
               if($x == 1)
               ;
               else{
                $y = 1;
                    $MinuteDocument->save();
            }
             }
            if($y == 1 )
                 return redirect('/MinuteDocument/MinuteDocument')->with('mssg','You have sucessfully Made the document');
             else              
                return redirect('/MinuteDocument/MinuteDocument')->with('msg', 'Sorry Documnet is already made');
            }
        }
        