<?php

namespace App\Http\Controllers;

use App\Models\Manager\ProdBrandsManagerInterface;
use App\Models\Manager\ProdCategoriesManagerInterface;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Manager\ProdStocksManagerInterface;
use App\Models\Manager\SalesStoresManagerInterface;
use App\Models\Manager\SalesCustomersManagerInterface;
use App\Models\Manager\SalesOrdersManagerInterface;
use App\Models\Manager\SalesStaffsManagerInterface;


class HomeController extends Controller
{
    public function index(
        ProdBrandsManagerInterface $brandManager,
        ProdCategoriesManagerInterface $categoryManager,
        ProdProductsManagerInterface $productManager,
        ProdStocksManagerInterface $stockMananger,
        SalesStoresManagerInterface $storeManager,
        SalesCustomersManagerInterface $customerManager,
        SalesStaffsManagerInterface $staffManager,
        SalesOrdersManagerInterface $orderManager
    ) {
        $allBrands = $brandManager->getAllBrands();
        $allCategories = $categoryManager->getAllCategories();
        $allProducts = $productManager->getAllProducts();
        $allStocks = $stockMananger->getAllStocks();
        $allStores = $storeManager->getAllStores();
        $allCustomers = $customerManager->getAllCustomers();
        $allStaffs = $staffManager->getAllStaffs();
        $allOrders = $orderManager->getAllOrders();

        return view('home')->with([
            'brands' => $allBrands,
            'categories' => $allCategories,
            'products' => $allProducts,
            'stocks' => $allStocks,
            'stores' => $allStores,
            'customers' => $allCustomers,
            'staffs' => $allStaffs,
            'orders' => $allOrders
        ]);
    }
}
