<?php

namespace App\Http\Controllers;

use App\Models\Manager\SalesOrderItemsManagerInterface;
use Illuminate\Http\Request;
use App\Models\Manager\SalesOrdersItemsManagerInterface;
use App\Models\Manager\SalesOrdersManagerInterface;

class OrderItemsController extends Controller
{

    public function index(){

    }


    public function allJsonOrdItem(SalesOrderItemsManagerInterface $orderItemsManager)
    {
        $orderIte = $orderItemsManager->getAllOrderItems();
        return response()->json($orderIte);
    }


    public function getOrdStoreMonth(SalesOrderItemsManagerInterface $orderItemsManager)
    {
        $orderStoreMonth = $orderItemsManager->getOrdersStoreMonth();
        return response()->json($orderStoreMonth);
    }
}
