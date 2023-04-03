<?php

namespace App\Http\Controllers;
      
    use Illuminate\Http\Request;
    
    use App\Models\Notification;
    use App\Models\Land;
    use App\Models\LandOwner;
    use App\Models\ProReqToLand;
    use App\Models\MinuteDocument;
    class NotificationController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth');
        }

        public function index()
        {
            $Notification = Notification::all();
            return view('Notification.index', [
                'Notifications' => $Notification
            ]);
        }

        public  function create()
                
        {
            // $ProReqToLand = ProReqToLand::all();
            return view('Notification.create');
            // ,[
            //     'proReqToLand' => $ProReqToLand
            // ]);
        }
        
        public  function see()
                
        {
            if(request('reason')=='Counting')
            $ProReqToLand = MinuteDocument::select('project')->where('type','Counting')->groupBy('project')->get();
            else
            $ProReqToLand = ProReqToLand::all();
            return view('Notification.see',[
                'ProReqToLand' => $ProReqToLand,
                'reason'=>request('reason')
            ]);
        }

        public  function find()
                
        {
            // if(request('reason')=='Counting')
            // {
             $ProReqToLand = ProReqToLand::select('project','sub_kebele')->where('project',request('project'))->groupBy('project','sub_kebele')->get();
            // }
            // else{
            // $ProReqToLand = ProReqToLand::select('project','sub_kebele')->where('project',request('project'))->groupBy('project')->get();
            // }
            foreach($ProReqToLand as $temp)
            $land = Land::select('landOwner_id')->where('sub_kebele',$temp->sub_kebele)->groupBy('landOwner_id')->get();
            $landOwner =LandOwner::all();
        // }
            // return view('Notification.see',[
            //     'proReqToLand' => $ProReqToLand,
            //     'reason'=>request('reason')
            // ]);
            // $ProReqToLand = ProReqToLand::all()->where('project',request('project'));
            return view('Notification.find',[
                'ProReqToLand' => $land,
                'reason'=>request('reason'),
                'project'=>request('project'),
                'landOwner'=>$landOwner
            ]);
        }

        public function show($id)
        {
            $Notification = Notification::findOrFail($id);
            return view('Notification.show', [
                'Notification' => $Notification
            ]);
        }
         

        public function home()
        {
            return view('Notification.home');
        }

        public function distroy($id)
        {
            $Notification = Notification::findOrFail($id);
            $Notification ->delete();
            return redirect('/Notification/seeNotification')->with('mssg', 'You have sucessfully deleted the record');
        }
        public function store()
        {
            // if(request('reason'=='Counting'))
            // $ProReqToLand = MinuteDocument::all()->where('project',request('project'));
            // else
            $y = 0;
            $ProReqToLand = ProReqToLand::all()->where('project',request('project'));
            foreach($ProReqToLand as $temp)
            $land = Land::all()->where('sub_kebele',$temp->sub_kebele)->sortBy('landOwner_id');
            $landOwner =LandOwner::all();
            foreach($land as $temp){
            $Notification = new Notification();
            $Notification->responsibility = request('responsibility');
            $Notification->received = request($temp->landOwner_id);
            $Notification->reason = request('reason');
            $Notification->project = request('project');
            $Notification->land_owner_id = $temp->landOwner_id;
            $check = Notification::all();
            $x = 0;
            foreach($check as $temp)
           {
           if($Notification->project==$temp->project && $Notification->land_owner_id == $temp->land_owner_id && $Notification->reason == $temp->reason)
           $x =1;
           }
           if($x==1)
;
           else{
            $y = 1;
                $Notification->save();
           }
        }
        if($y == 0)
        return redirect('/Notification/Notification')->with('msg','Sorry record is already exist');
        else
        return redirect('/Notification/Notification')->with('mssg','You have sucessfully added the record');

            
        }
        public  function answer($id)     
        {
            $request = ProReqToLand::findOrFail($id);
            $land = Land::all()->where('sub_kebele',$request->sub_kebele);
            // return view('Land.index',[
            //     'lands'=>$land
            // ]);
            $y = 0;
            foreach ($land as $temp){
            $Notification = new Notification();
            $Notification->responsibility = 'Notifier';
            $Notification->reason =  'Discussion';
            $Notification->received = 'received';
            $Notification->project = $request->project;
            $Notification->land_owner_id = $temp->landOwner_id;
            $check = Notification::all();
            $x = 0;
            foreach($check as $temp1)
           {
           if(($Notification->project==$temp1->project && $Notification->land_owner_id == $temp1->land_owner_id && $Notification->reason == $temp1->reason))
           $x = 1;
           }
           if($x==1){
           ; 
           }// return redirect('/')->with('mssg', 'Sorry the food is already exist');
           else{
            $y = 1;
            $Notification->save();
        }
    }
    if($y == 1)
    return redirect('/NotifierHome')->with('mssg','You have sucessfully answered the request');
    else{
        return redirect('/NotifierHome')->with('msg', 'Sorry the request is already answered');
    }       
}
           
    }
    