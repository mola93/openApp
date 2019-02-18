<?php

namespace App;
use App\User;

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
}
