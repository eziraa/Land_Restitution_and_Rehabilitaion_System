<?php

namespace App\Http\Controllers;
        
        use Illuminate\Http\Request;
        use App\Models\Employee;
        
        class EmployeeController extends Controller
        {
            public function __construct()
                {
                    $this->middleware('auth');
                }
                public function home() {
                    return view('Employee.home');
                }
                public function choose(){
                    return view('Employee');
                }
                public function index()
                {
                    $Employee = Employee::all();
                    return view('Employee.index', [
                        'Employees' => $Employee
                    ])->with('msg','');
                }
                public  function create()
            
                {
                    return view('Employee.create')->with('mssg','')->with('msg','');
                }
                public function show($id)
                {
                    $temp = Employee::findOrFail($id);
                    return view('Employee.show', [
                        'Employees' => $temp
                    ]);
                }
                public function see($id)
                {
                    $temp = Employee::all()->where('job',$id);
                    return view('Employee.index', [
                        'Employees' => $temp
                    ])->with('msg','');
                }
        
                public function distroy($id)
                {
                    $Employee = Employee::findOrFail($id);
                    $Employee ->delete();
                   $Employee = Employee::all();
                    return view('Employee.index', [
                        'Employees' => $Employee
                    ])->with('msg','You have sucessfully deleted the Emplyeer');
                }
                public function store()
                {
                    $Employee = new Employee();
                    $Employee->name = request('name');
                    $Employee->gender = request('gender');
                    $Employee->email = request('email');
                    $Employee->phone_number = request('phone_number');
                    $Employee->job = request('job');
                    $check = Employee::all();
                    $x = 0;
                    foreach($check as $temp)
                   {
                   if($Employee->email==$temp->email)
                    return view('Employee.create')->with('mssg','')->with('msg', 'Sorry the email is already exist');
                   }
                  
                        $Employee->save();
                        return view('Employee.create')->with('msg','')->with('mssg','You have sucessfully added the employee');
                  
                    
                }
               
        }
        