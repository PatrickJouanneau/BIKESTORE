<?php

namespace App\Http\Controllers;

use App\Models\Manager\SalesOrderItemsManagerInterface;
use Illuminate\Http\Request;

class ComplexRequestController extends Controller
{
    public function getOrdStoreMonth(SalesOrderItemsManagerInterface $orderItemsManager)
    {
        $orderStoreMonth = $orderItemsManager->getOrdersStoreMonth();

        return response()->json($orderStoreMonth);
    }
}
