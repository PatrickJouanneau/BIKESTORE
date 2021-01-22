<?php

namespace App\Models\Manager;

use App\Models\Model\SalesOrderItems;

interface SalesOrderItemsManagerInterface
{
    public function getListeOrderItems();
    public function getAllOrderItems();
    public function countSalesOrderItemsWithProductId($productId);
    public function getOrdersStoreMonth();
    public function getOrdersStoreWeek();
    public function getOrdersStaffMonth();
    public function getOrdersStaffyear();
}
