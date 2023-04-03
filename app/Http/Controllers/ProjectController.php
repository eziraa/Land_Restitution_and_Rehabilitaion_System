<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
        public function home(){
            return view('Project.home');
        }
        public function index()
        {
            $project = Project::all();
            return view('Project.index', [
                'projects' => $project
            ])->with('msg','');
        }
        public  function create()
    
        {
            return view('Project.create')->with('mssg','')->with('msg','');
        }
        public function show($id)
        {
            $project = Project::all();
            foreach($project as $temp)
            if($temp->name == $id || $temp->id == $id)
            return view('Project.show', [
                'project' => $temp
            ]);
        }

        public function distroy($id)
        {
            $project = Project::findOrFail($id);
            $project ->delete();
            
            $project = Project::all();
            return view('Project.index', [
                'projects' => $project
            ])->with('msg', 'You have sucessfully deleted the food');
        }
        public function store()
        {
            $project = new Project();
            $project->name = request('name');
            $project->type = request('type');
            $check = Project::all();
            $x = 0;
            foreach($check as $temp)
           {
           if($project->name==$temp->name)
           $x =1;
           }
           if($x == 1)
           return view('Project.create')->with('mssg','')->with('msg', 'Sorry the Project is already exist');
           else{
                $project->save();
                return view('Project.create')->with('msg','')->with('mssg','You have sucessfully added the food');
          }
           
            
        }
       
}
