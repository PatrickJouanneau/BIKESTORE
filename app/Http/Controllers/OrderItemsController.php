<?php

namespace App\Http\Controllers;

use App\Models\Manager\SalesOrderItemsManagerInterface;
use Illuminate\Http\Request;
use App\Models\Manager\SalesOrdersItemsManagerInterface;


class OrderItemsController extends Controller
{

    public function index(){

    }


    public function allJsonOrdItem(SalesOrderItemsManagerInterface $orderItemsManager)
    {
        $orderIte = $orderItemsManager->getAllOrderItems();
        return response()->json($orderIte);
    }
}
