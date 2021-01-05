<?php

namespace App\Models\DAO;

use App\Models\Model\ProdProducts;

interface SalesOrderItemsDaoInterface
{
    public function getAllOrderItems();
    public function getOrderItem($itemId);
    public function countSalesOrderItemsWithProductId(ProdProducts $productId);
}
