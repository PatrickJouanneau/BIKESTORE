<?php

namespace App\Models\DAO;


interface SalesOrderItemsDaoInterface
{
    public function getAllOrderItems();
    public function getOrderItem($itemId);
    public function countSalesOrderItemsWithProductId($productId);
}
