<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager\SalesOrdersManagerInterface;
use App\Models\Model\SalesOrders;
use Facade\Ignition\Http\Controllers\ScriptController;

class OrderController extends Controller
{
    public function index(){

    }


    public function allJsonOrd(SalesOrdersManagerInterface $ordersManager)
    {
        $order = $ordersManager->getAllOrders();
        return response()->json($order);

    }
}
