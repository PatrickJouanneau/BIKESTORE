<?php

namespace App\Models\DAO;


interface SalesOrdersDaoInterface
{
    //public function getListeOrders();
    public function getAllOrders();
    public function getOrderById($orderId);
}
