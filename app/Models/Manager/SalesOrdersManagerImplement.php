<?php

namespace App\Models\Manager;

use App\Models\DAO\SalesOrdersDaoInterface;
use App\Models\Manager\SalesOrdersManagerInterface;


class SalesOrdersManagerImplement implements SalesOrdersManagerInterface
{
    private $orderDao;
    public function __construct(SalesOrdersDaoInterface $orderDao)
    {
        $this->orderDao = $orderDao;
    }

    public function getAllOrders()
    {
        return $this->orderDao->getAllOrders();
    }
}
