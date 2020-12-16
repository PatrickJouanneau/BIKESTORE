<?php

namespace App\Models\Dao;


interface SalesCustomersDaoInterface
{
    public function getAllCustomers();
    public function getCustomerById($customerId);
}

