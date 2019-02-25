<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use App\Project;
use App\Task;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()

    {
        Project::observe(ProjectObserver::class);
        Task::observe(TaskObserver::class);
        Schema::defaultStringLength(191); 
        //
    }
}
