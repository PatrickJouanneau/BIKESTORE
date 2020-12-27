<?php

namespace App\Models\DAO;

use App\Models\Model\SalesCustomers;


interface SalesCustomersDaoInterface
{
    public function getAllCustomers();
    public function getCustomerById($customerId);
    public function createCustomer(SalesCustomers $salesCustomers);
}

