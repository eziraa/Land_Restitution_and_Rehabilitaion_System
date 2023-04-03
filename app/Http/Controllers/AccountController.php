<?php

namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use App\Models\Account;
    
    class AccountController extends Controller
    {
        public function __construct()
            {
                $this->middleware('auth');
            }
            public function home() {
                return view('Account.home');
            }
            public function index()
            {
                $Account = Account::all();
                return view('Account.index', [
                    'Accounts' => $Account
                ]);
            }
            public  function create()
        
            {
                return view('Account.create');
            }
            public function show($id)
            {
                $Account = Account::findOrFail($id);
                return view('Account.show', [
                    'Account' => $Account
                ]);
            }
    
            public function distroy($id)
            {
                $Account = Account::findOrFail($id);
                $Account ->delete();
                return redirect('/Account/seeAccount')->with('msg', 'You have sucessfully deleted the food');
            }
            public function store()
            {
                $Account = new Account();
                $Account->account = request('account');
                $Account->land_owner_id = request('land_owner_id');
                $check = Account::all();
                $x = 0;
                foreach($check as $temp)
               {
               if($Account->account==$temp->account)
               $x =1;
               }
               if($x)
                return redirect('/Account/Account')->with('msg', 'Sorry the account is already exist');
               else{
                    $Account->save();
                    return redirect('/Account/Account')->with('mssg','You have sucessfully added the account');
              }
               
                
            }
           
    }
    