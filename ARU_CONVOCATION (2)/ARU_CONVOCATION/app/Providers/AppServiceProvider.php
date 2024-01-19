<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//added fof paginatipon support with bpptstrap
use Illuminate\pagination\paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // include or use here the bootsrap
        paginator::useBootstrap();
    }
}
