<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;


class ProjectsTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    public function test_a_user_can_create_a_project()
    {

        $this->withoutExceptionHandling();
     $attributes = [
         'title' => $this->faker->sentence,
         'description' => $this->faker->paragraph

     ];

     $this->post('/projects', $attributes);

     $this->assertDatabaseHas('projects', $attributes); 
   
   
    }
    public function test_a_user_can_view_a_project(){
      $project =  factory('App\Project')->create();

      $this->get('/projects/' .$project->id)
      ->assertSee($project->title)
      ->assertSee($project->description);

    }
}
