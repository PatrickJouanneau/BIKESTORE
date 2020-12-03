<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
     * Voir instance Paginator
     * https://laravel.com/docs/8.x/pagination#using-bootstrap
     * 
     * https://www.techiediaries.com/laravel-8-bootstrap-4-tailwind/
     * 
     *
     * @return void
     */

    public function boot()
    {
        Paginator::useBootstrap();
    }


}
