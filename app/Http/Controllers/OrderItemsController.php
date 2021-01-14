<?php

namespace App\Http\Controllers;

use App\Models\Manager\SalesOrderItemsManagerInterface;
use Illuminate\Http\Request;
use App\Models\Manager\SalesOrdersItemsManagerInterface;
use App\Models\Manager\SalesOrdersManagerInterface;

class OrderItemsController extends Controller
{

    public function index()
    {
    }


    public function allJsonOrdItem(SalesOrderItemsManagerInterface $orderItemsManager)
    {
        $orderIte = $orderItemsManager->getAllOrderItems();
        return response()->json($orderIte);
    }


    public function getOrdStoreMonth(SalesOrderItemsManagerInterface $orderItemsManager)
    {
        //$orderStoreMonth = $orderItemsManager->getOrdersStoreMonth();
        $array[1] = 1;
        $array[2] = 2;
        $array[3][1] = 2;
        return response()->json($array);
    }
}
