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
use GuzzleHttp\Psr7\Request;
use Symfony\Component\Console\Input\Input;

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
        $allCategories = $categoryManager->getAllCategories();
        $listeProducts = $productManager->getListProducts();
        $listeStocks = $stockMananger->getListeStocks();
        $allStores = $storeManager->getAllStores();
        $listeCustomers = $customerManager->getListeCustomers();
        $allStaffs = $staffManager->getAllStaffs();
        $allOrders = $orderManager->getAllOrders();
        $allOrderItems = $orderItemManager->getAllOrderItems();
        $tabActive = !empty($_GET['activeTab']) ? $_GET['activeTab'] : null;

        return view('home')->with([
            'brands' => $allBrands,
            'categories' => $allCategories,
            'products' => $listeProducts,
            'stocks' => $listeStocks,
            'stores' => $allStores,
            'customers' => $listeCustomers,
            'staffs' => $allStaffs,
            'orders' => $allOrders,
            'orderItems' => $allOrderItems,
            'activeTab' =>$tabActive
        ]);
    }

    public function success()
    {
        $tabActive = !empty($_GET['activeTab']) ? $_GET['activeTab'] : null;

        return view('Success')->with(["activeTab"=>$tabActive]);
    }


    public function failure()
    {
        return view('Failure');
    }
}
