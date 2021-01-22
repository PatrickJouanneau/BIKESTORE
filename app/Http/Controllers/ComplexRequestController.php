<?php

namespace App\Http\Controllers;

use App\Models\DAO\SalesOrderItemsDaoInterface;
use App\Models\Manager\ProdStocksManagerInterface;
use App\Models\Manager\SalesOrderItemsManagerInterface;
use Illuminate\Http\Request;

class ComplexRequestController extends Controller
{
    public function getOrdStoreMonth(SalesOrderItemsManagerInterface $orderItemsManager)
    {
        $orderStoreMonth = $orderItemsManager->getOrdersStoreMonth();

        return response()->json($orderStoreMonth);
    }


    public function getOrdStoreWeek(SalesOrderItemsDaoInterface $orderItemsManager)
    {
        $orderStoreWeek = $orderItemsManager->getOrdersStoreWeek();

        return response()->json($orderStoreWeek);
    }


    public function getOrdStaffMonth(SalesOrderItemsManagerInterface $orderItemsManager)
    {
        $orderStaffMonth = $orderItemsManager->getOrdersStaffMonth();

        return response()->json($orderStaffMonth);
    }


    public function getOrdStaffYear(SalesOrderItemsManagerInterface $orderItemsManager)
    {
        $orderStaffYear = $orderItemsManager->getOrdersStaffYear();

        return response()->json($orderStaffYear);
    }


    public function getStkBrand(ProdStocksManagerInterface $stockManager)
    {
        $stockBrand = $stockManager->getStockBrand();

        return response()->json($stockBrand);
    }


    public function getStkCat(ProdStocksManagerInterface $stockManager)
    {
        $stockCategory = $stockManager->getStockCategory();

        return response()->json($stockCategory);
    }

}
