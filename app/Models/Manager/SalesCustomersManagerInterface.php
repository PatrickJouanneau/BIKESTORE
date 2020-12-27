<?php

namespace App\Models\Manager;

use App\Models\Model\SalesCustomers;

interface SalesCustomersManagerInterface
{
    public function getAllCustomers();
    public function getCustomerById($customerId);
    public function createCustomer(SalesCustomers $salesCustomers);
}
