<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Profile\Contact;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->only('create', 'index', 'show', 'edit', 'store'); //hemos de estar logados.
    }
   
    public function index(){
        
        $roleUser = Auth::user()->role;
        $idUser = Auth::user()->id;

        if ($roleUser === 'talent') {
            $projects = Project::where('user_id', '=', strval($idUser))->get();
            return view('projects.index', ['projects' => $projects]);
        } else if($roleUser === 'company'){
            $projects = Project::simplePaginate(5);
            return view('projects.index', ['projects' => $projects]);
        } else{
            return view('partials.anauthorized');
        }

    }

    public function show(Project $project){
        $user = Contact::where('user_id', '=', strval($project->user_id))->first();
        return view('projects.show', [
            'user' => $user,
            'project' => $project
        ]);
    }

    public function create(){
        return view('projects.create',[
            'project'=> new Project
        ]);
    }

    public function store(SaveProjectRequest $request){
        Project::create($request->validated());
        return redirect()->route('projects.index');
    }

    public function edit(Project $project){
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request){
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status');
    }

    public function delete(Project $project){
        $project->delete();
        return redirect()->route('projects.index');
    }
}