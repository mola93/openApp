<?php

namespace App;
use App\User;
use App\Task;
use App\Activity;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    //binding a route to our model
    public function path(){

        return "/projects/{$this->id}";
    }

    public function owner(){

        return $this->belongsTo(User::class);
    }

    public function addTask($body){

        return $this->tasks()->create(compact('body'));
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function activity(){

        return $this->hasMany(Activity::class);
    }
}
