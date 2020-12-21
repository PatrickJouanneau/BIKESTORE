<?php

namespace App\Http\Controllers;

use App\Models\Manager\ProdBrandsManagerInterface;
use App\Models\Manager\ProdCategoriesManagerInterface;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Manager\ProdStocksManagerInterface;
use App\Models\Manager\SalesStoresManagerInterface;
use App\Models\Manager\SalesCustomersManagerInterface;
use App\Models\Manager\SalesOrderItemsManagerInterface;
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
        SalesOrdersManagerInterface $orderManager,
        SalesOrderItemsManagerInterface $orderItemManager
    ) {
        $allBrands = $brandManager->getAllBrands();
        //$createBrand = $brandManager->createBrand();
        $allCategories = $categoryManager->getAllCategories();
        $allProducts = $productManager->getAllProducts();
        $allStocks = $stockMananger->getAllStocks();
        $allStores = $storeManager->getAllStores();
        $allCustomers = $customerManager->getAllCustomers();
        $allStaffs = $staffManager->getAllStaffs();
        $allOrders = $orderManager->getAllOrders();
        $allOrderItems = $orderItemManager->getAllOrderItems();

        return view('home')->with([
            'brands' => $allBrands,
            //'brands' => $createBrand,
            'categories' => $allCategories,
            'products' => $allProducts,
            'stocks' => $allStocks,
            'stores' => $allStores,
            'customers' => $allCustomers,
            'staffs' => $allStaffs,
            'orders' => $allOrders,
            'orderItems' => $allOrderItems
        ]);
    }
}
