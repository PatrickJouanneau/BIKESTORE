<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use App\Models\DAO\ProdBrandsDaoImplement;
use App\Models\DAO\ProdBrandsDaoInterface;
use App\Models\DAO\ProdCategoriesDaoImplement;
use App\Models\DAO\ProdCategoriesDaoInterface;
use App\Models\DAO\ProdProductsDaoImplement;
use App\Models\DAO\ProdProductsDaoInterface;
use App\Models\DAO\ProdStocksDaoImplement;
use App\Models\DAO\ProdStocksDaoInterface;
use App\Models\DAO\SalesStoresDaoImplement;
use App\Models\DAO\SalesStoresDaoInterface;
use App\Models\Manager\ProdBrandsManagerImplement;
use App\Models\Manager\ProdBrandsManagerInterface;
use App\Models\Manager\ProdCategoriesManagerImplement;
use App\Models\Manager\ProdCategoriesManagerInterface;
use App\Models\Manager\ProdProductsManagerImplement;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Manager\ProdStocksManagerImplement;
use App\Models\Manager\ProdStocksManagerInterface;
use App\Models\Manager\SalesStoresManagerImplement;
use App\Models\Manager\SalesStoresManagerInterface;

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
        $this->app->bind(ProdBrandsDaoInterface::class, ProdBrandsDaoImplement::class);
        $this->app->bind(ProdCategoriesManagerInterface::class, ProdCategoriesManagerImplement::class);
        $this->app->bind(ProdCategoriesDaoInterface::class, ProdCategoriesDaoImplement::class);
        $this->app->bind(ProdProductsManagerInterface::class, ProdProductsManagerImplement::class);
        $this->app->bind(ProdProductsDaoInterface::class, ProdProductsDaoImplement::class);
        $this->app->bind(ProdStocksManagerInterface::class, ProdStocksManagerImplement::class);
        $this->app->bind(ProdStocksDaoInterface::class, ProdStocksDaoImplement::class);
        $this->app->bind(SalesStoresManagerInterface::class, SalesStoresManagerImplement::class);
        $this->app->bind(SalesStoresDaoInterface::class, SalesStoresDaoImplement::class);
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
