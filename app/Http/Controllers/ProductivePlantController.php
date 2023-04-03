<?php

    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use App\Models\Land;
    use App\Models\ProductivePlant;
    
    class ProductivePlantController extends Controller
    {
        public function __construct()
            {
                $this->middleware('auth');
            }
            public function home() {
                return view('ProductivePlant.home');
            }
            public function index()
            {
                $productivePlant = ProductivePlant::all();
                return view('ProductivePlant.index', [
                    'productivePlants' => $productivePlant
                ])->with('msg','');
            }
            public  function create()
        
            {
                return view('ProductivePlant.create')->with('mssg','')->with('msg','');
            }
            public function show($id)
            {   
                $productivePlant = ProductivePlant::all();
                foreach( $productivePlant as $temp)
                if($temp->name == $id || $temp->id = $id)
                return view('ProductivePlant.show', [
                    'productivePlant' => $temp
                ]);
            }
    
            public function distroy($id)
            {
                $productivePlant = ProductivePlant::findOrFail($id);
                $productivePlant ->delete();
                $productivePlant = ProductivePlant::all();
                return view('ProductivePlant.index', [
                    'productivePlants' => $productivePlant
                ])->with('msg','You have sucessfully deleted the food');
            }
            public function store()
            {
                $productivePlant = new ProductivePlant();
                $productivePlant->name = request('name');
                $productivePlant->Lprice = request('Lprice');
                $productivePlant->Mprice = request('Mprice');
                $productivePlant->Hprice = request('Hprice');
                $check = ProductivePlant::all();
                $x = 0;
                foreach($check as $temp)
               {
               if($productivePlant->name==$temp->name)
               $x =1;
               }
               if($x == 1)
               return view('ProductivePlant.create')->with('mssg','')->with('msg','Sorry the plant is already exist');
               else{
                    $productivePlant->save();
                    return view('ProductivePlant.create')->with('mssg','You have sucessfully added the plant')->with('msg','');
              }
                
            }
           
    }
    
    
    