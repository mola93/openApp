<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;


class ProjectTaskController extends Controller
{
    //
    public function update(Project $project, Task $task)
    {   
        //policy
        $this->authorize('update', $project);

        request()->validate(['body' => 'required']);
        $task->update([
            'body' => request('body'),
            'completed' => request()->has('completed')
        ]);
        return redirect($project->path());
    }

    public function store(Project $project){

        $this->authorize('update', $project);


       request()->validate(['body' => 'required']);

       $project->addTask(request('body'));

        return redirect($project->path());
         
    }
}
