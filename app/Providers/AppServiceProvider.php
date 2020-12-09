<?php

namespace App\Providers;

use App\Models\DAO\ProdBrandDaoImplement;
use App\Models\DAO\ProdBrandsDaoInterface;
use App\Models\Manager\ProdBrandsManagerImplement;
use App\Models\Manager\ProdBrandsManagerInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProdBrandsManagerInterface::class, ProdBrandsManagerImplement::class);
        $this->app->bind(ProdBrandsDaoInterface::class, ProdBrandDaoImplement::class);
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
        //Paginator::useBootstrap();
    }
}
