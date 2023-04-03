<?php



    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use App\Models\LandGrowsNonProductivePlant;
    
    class LandGrowsNonProductivePlantController extends Controller
    {
        public function __construct()
            {
                $this->middleware('auth');
            }
            public function index()
            {
                $landGrowsnonProductivePlant = LandGrowsNonProductivePlant::all();
                return view('LandGrowsNonProductivePlant.index', [
                    'landGrowsnonProductivePlants' => $landGrowsnonProductivePlant
                ]);
            }
            public  function create()
        
            {
                return view('LandGrowsNonProductivePlant.create',[
                    'id'=>request('id')
                ])->with('mssg',"")->with('msg',"");
            }
            public function show($id)
            {
                $landGrowsnonProductivePlant = LandGrowsNonProductivePlant::findOrFail($id);
                return view('LandGrowsNonProductivePlant.show', [
                    'landGrowsnonProductivePlant' => $landGrowsnonProductivePlant
                ]);
            }
    
            public function distroy($id)
            {
                $landGrowsnonProductivePlant = LandGrowsNonProductivePlant::findOrFail($id);
                $landGrowsnonProductivePlant ->delete();
                $landGrowsnonProductivePlant = LandGrowsNonProductivePlant::all();
                return view('LandGrowsNonProductivePlant.index', [
                    'landGrowsnonProductivePlants' => $landGrowsnonProductivePlant
                ]);
                // return redirect('/landGrowsnonProductivePla')->with('mssg', 'You have sucessfully deleted the food');
            }
            public function store()
            {
                $landGrowsnonProductivePlant = new LandGrowsNonProductivePlant();
                $landGrowsnonProductivePlant->name = request('name');
                $landGrowsnonProductivePlant->Quantity = request('Quantity');
                $landGrowsnonProductivePlant->growth = request('growth');
                $landGrowsnonProductivePlant->preservation = request('preservation');
                $landGrowsnonProductivePlant->land_id = request('land_id');
                $check = LandGrowsNonProductivePlant::all();
                $x = 0;
                foreach($check as $temp)
               {
               if($landGrowsnonProductivePlant->name==$temp->name&& $landGrowsnonProductivePlant->land_id== $temp->land_id)
               $x =1;
               }
               $z = $landGrowsnonProductivePlant->land_id;
             if($x == 1)

             return view('LandGrowsNonProductivePlant.create',[
                'id'=>request('land_id')
            ])->with('msg','Sorry the plant is already counted')->with('mssg','');
             else{
                  $landGrowsnonProductivePlant->save();
                 return view('LandGrowsNonProductivePlant.create',[
                'id'=>request('land_id')
            ])->with('msg','')->with('mssg','You have sucessfully added the food');
            }
              
                
            }
           
    }
    
    
    