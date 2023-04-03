<?php


    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use App\Models\LandGrowsProductivePlant;
    
    class LandGrowsProductivePlantController extends Controller
    {
        public function __construct()
            {
                $this->middleware('auth');
            }
            public function index()
            {
                $landGrowsProductivePlant = LandGrowsProductivePlant::all();
                return view('LandGrowsProductivePlant.index', [
                    'landGrowsProductivePlants' => $landGrowsProductivePlant
                ]);
            }
            public  function create()
        
            {
                return view('LandGrowsProductivePlant.create',[
                    'id'=>request('id')
                ])->with('msg',' ')->with('mssg','');
            }
            public function show($id)
            {
                $landGrowsProductivePlant = LandGrowsProductivePlant::findOrFail($id);
                return view('LandGrowsProductivePlant.show', [
                    'landGrowsProductivePlant' => $landGrowsProductivePlant
                ]);
            }
    
            public function distroy($id)
            {
                $landGrowsProductivePlant = LandGrowsProductivePlant::findOrFail($id);
                $landGrowsProductivePlant ->delete();
                return view('LandGrowsProductivePlant.index',[
                    'landGrowsProductivePlants'=>LandGrowsProductivePlant::all()
                ])->with('msg','')->with('mssg','You have sucessfully added the food');
            }
            public function store()
            {
                $landGrowsProductivePlant = new LandGrowsProductivePlant();
                $landGrowsProductivePlant->name = request('name');
                $landGrowsProductivePlant->LQuantity = request('LQuantity');
                $landGrowsProductivePlant->MQuanity = request('MQuantity');
                $landGrowsProductivePlant->HQuanity = request('HQuantity');
                $landGrowsProductivePlant->land_id = request('land_id');
                $check = LandGrowsProductivePlant::all();
                $x = 0;
                foreach($check as $temp)
               {
               if($landGrowsProductivePlant->name==$temp->name&& $landGrowsProductivePlant->land_id== $temp->land_id)
               $x =1;
               }
               if($x == 1)
               return view('LandGrowsProductivePlant.create',[
                'id'=>request('land_id')
            ])->with('msg','Sorry the plant is already counted ')->with('mssg','');
               else{
                    $landGrowsProductivePlant->save();
                    return view('LandGrowsProductivePlant.create',[
                        'id'=>request('land_id')
                    ])->with('msg','')->with('mssg','You have sucessfully added the food');
              }
                
            }
           
    }
    
    
    