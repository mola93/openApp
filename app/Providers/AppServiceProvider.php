<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use App\Project;
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
        Schema::defaultStringLength(191); 
        //
    }
}
