<?php

namespace App\Http\Controllers;
              
            use Illuminate\Http\Request;
            
            use App\Models\Estimation;
            use App\Models\CountProperty;
            use App\Models\ProReqToLand;
            use App\Models\Land;
            use App\Models\Crop;
            use App\Models\BLDGMaterialBuildsHouse;
            use App\Models\NonProductivePlant;
            use App\Models\MovableProperty;
            use App\Models\House;
            use App\Models\BLDGMaterial;
            use App\Models\ProductivePlant;
            use App\Models\LandGivesCrop;
            use App\Models\LandOwner;
            use App\Models\LandGrowsProductivePlant;
            use App\Models\LandGrowsNonProductivePlant;
            
            class EstimationController extends Controller
            {
                public function __construct()
                {
                    $this->middleware('auth');
                }
                public function index()
                {
                    $Estimation = Estimation::all();
                    $landOwner = LandOwner::all();
                    return view('Estimation.index', [
                        'Estimations' => $Estimation,
                        'landOwner'=>$landOwner
                    ]);
                }
                public  function create()
                        
                {
                    return view('Estimation.create');
                }
                public function show($id)
                {
                    $Estimation = Estimation::findOrFail($id);
                    return view('Estimation.show', [
                        'Estimation' => $Estimation
                    ]);
                }
                public function select(){
                    $project = CountProperty::select('project')->groupBy('project')->get();
                    return view('Estimation.select',[
                        'project'=>$project
                    ]);
                }
                public function find(){
                    $project = ProReqToLand::all()->where('project',request('project'));
                    $sum = 0;
                    foreach($project as $temp)
                    $land = Land::all()->where('sub_kebele',$temp->sub_kebele);
                    foreach( $land as $temp2)
                    {
                        $sum = 0;
                        $landGivesCrop = LandGivesCrop::all()->where('land_id',$temp2->id);
                        foreach($landGivesCrop as $temp){
                        $crop = Crop::all()->where('name',$temp->name);
                        foreach($crop as $temp1)
                         $sum = $sum + $temp1->price *( $temp->this + $temp->last +$temp->two) ;
                        }
                        $productive = LandGrowsProductivePlant::all()->where('land_id',$temp2->id);
                        foreach($productive as $proTemp){
                            $proPlant = ProductivePlant::all()->where('name',$proTemp->name);
                            foreach($proPlant as $proPlantTemp)
                            $sum = $sum + $proTemp->LQuantity * $proPlantTemp->Lprice + $proTemp->MQuanity * $proPlantTemp->Mprice +$proTemp->HQuanity * $proPlantTemp->Hprice ;
                        }
                        // return  $sum ;
                        $nonProductive = LandGrowsNonProductivePlant::all()->where('land_id',$temp2->id);
                        foreach($nonProductive as $nonTemp ){
                           $nonPro = NonProductivePlant::all()->where('name',$nonTemp->name);
                           foreach($nonPro as $nonProTemp)
                           $sum = $sum + $nonProTemp->price * $nonTemp->Quantity + $nonTemp->growth +$nonTemp->preservation;
                        }
                        $movable = MovableProperty::all()->where('land_id',$temp2->id);
                        foreach($movable as $movTemp)
                        $sum = $sum + $movTemp->uprooting + $movTemp->transport + $movTemp->installing + $movTemp->recovery;

                        $house =  House::all()->where('land_id',$temp2->id);
                        foreach($house as $houseTemp)
                        {
                            $sum = $sum + $houseTemp->numberOf *  $houseTemp->labourCost;
                            $BLDG = BLDGMaterialBuildsHouse::all()->where('house_id',$houseTemp->id);
                            foreach($BLDG as $BLDGtemp)
                            {
                                $BL = BLDGMaterial::all()->where('name',$BLDGtemp->name);
                                foreach($BL as $BLtemp)
                                if($BLDGtemp->name == $BLtemp->name)
                                $sum = $sum + $BLtemp->price * $BLDGtemp->quantity;
                            }
                        }
                    $Estimation = new Estimation();
                    $Estimation->responsibility = 'Estimator';
                    $Estimation->check = 'Estimated';
                    $Estimation->project = request('project');
                    $Estimation->amount = $sum;
                    $Estimation->land_owner_id = $temp2->landOwner_id;
                    $check = Estimation::all();
                    $x = 0;
                    foreach($check as $temp)
                   {
                   if($Estimation->project==$temp->project && $Estimation->land_owner_id==$temp->land_owner_id){
                    $x = $temp->amount;
                     $temp->delete();
                   }
                    //  return  $Estimation->amount;
                    
                   }
                   $Estimation->amount = $Estimation->amount + $x;
                   $Estimation->save();
                }
                $Estimation = Estimation::all();
                $landOwner = LandOwner::all();
                return view('Estimation.index', [
                    'Estimations' => $Estimation,
                    'landOwner'=>$landOwner
                ]);              
            

                }
                    
                public function distroy($id)
                {
                    $Estimation = Estimation::findOrFail($id);
                    $Estimation ->delete();
                    $Estimation = Estimation::all();
                    $landOwner = LandOwner::all();
                    return view('Estimation.index', [
                        'Estimations' => $Estimation,
                        'landOwner'=>$landOwner
                    ]);
                    // return redirect('/')->with('mssg', 'You have sucessfully deleted the food');
                }
                public function store()
                {
                    $Estimation = new Estimation();
                    $Estimation->responsibility = request('responsibility');
                    $Estimation->check = request('check');
                    $Estimation->project = request('project');
                    $Estimation->amount = request('amount');
                    $Estimation->land_owner_id = request('land_owner_id');
                    $check = Estimation::all();
                    $x = 0;
                    foreach($check as $temp)
                   {
                   if($Estimation->project==$temp->project && $Estimation->land_owner_id==$temp->land_owner_id)
                   $x =1;
                   }
                   if($x)
                    return redirect('/')->with('mssg', 'Sorry the record is already exist');
                   else{
                        $Estimation->save();
                        return redirect('/')->with('mssg','You have sucessfully added the record');
                }
                
                    
                }
                   
            }
            
