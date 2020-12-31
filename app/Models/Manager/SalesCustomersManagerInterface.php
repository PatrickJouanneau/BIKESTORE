<?php

namespace App\Models\Manager;

use App\Models\Model\SalesCustomers;

interface SalesCustomersManagerInterface
{
    public function getAllCustomers();
    public function getListCustomers();
    public function getCustomerById($id);
    public function createCustomer(SalesCustomers $customers);
}
