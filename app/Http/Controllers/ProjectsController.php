<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProjectRequest;
use App\Project;

class ProjectsController extends Controller
{
    //
     public function index(){

        $projects  = auth()->user()->projects;

        return view('projects.index', compact('projects'));


     }

     public function create(){

      return view('projects.create');
     }


     public function store(){
 

        //dd($attributes);
      
        $project = auth()->user()->projects()->create($this->validateRequest());
        

        return redirect( $project->path());
         
    }

    public function show(Project $project ){
      //policy used
      $this->authorize('update', $project);

        return view('projects.show', compact('project'));
         
    }

    public function edit(Project $project ){

      return view('projects.edit', compact('project'));
    }


    public function update(UpdateProjectRequest $request, Project $project){

 

    
      $project->update($request->validated());
 
      //dd($attributes);
      return redirect($project->path());
     }

     protected function validateRequest(){
    
     return request()
      ->validate([
       'title' => 'sometimes|required',
       'description'=> 'sometimes|required',
       'notes'=> 'nullable',
      ]);

     }

}
