<?php

namespace App\Models\Manager;

use App\Models\DAO\SalesOrderItemsDaoInterface;
use App\Models\Manager\SalesOrderItemsManagerInterface;

class SalesOrderItemsManagerImplement implements SalesOrderItemsManagerInterface
{
    private $orderItemDao;
    public function __construct(SalesOrderItemsDaoInterface $orderItemDao)
    {
        $this->orderItemDao = $orderItemDao;
    }
    public function getAllOrderItems()
    {
        return $this->orderItemDao->getAllOrderItems();
    }
}
