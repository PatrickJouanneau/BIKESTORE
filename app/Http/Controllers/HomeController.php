<?php

namespace App\Http\Controllers;

use App\Models\Manager\ProdBrandsManagerInterface;
use App\Models\Manager\ProdCategoriesManagerInterface;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Manager\ProdStocksManagerInterface;
use App\Models\Manager\SalesStoresManagerInterface;


class HomeController extends Controller
{
    public function index(
        ProdBrandsManagerInterface $brandManager,
        ProdCategoriesManagerInterface $categoryManager,
        ProdProductsManagerInterface $productManager,
        ProdStocksManagerInterface $stockMananger,
        SalesStoresManagerInterface $storeManager
    ) {
        $allBrands = $brandManager->getAllBrands();
        $allCategories = $categoryManager->getAllCategories();
        $allProducts = $productManager->getAllProducts();
        $allStocks = $stockMananger->getAllStocks();
        $allStores = $storeManager->getAllStores();

        return view('home')->with([
            'brands' => $allBrands,
            'categories' => $allCategories,
            'products' => $allProducts,
            'stocks' => $allStocks,
            'stores' => $allStores
        ]);
    }
}
