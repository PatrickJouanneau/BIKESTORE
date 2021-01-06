<?php

namespace App\Models\Manager;

use App\Models\Model\SalesCustomers;

interface SalesCustomersManagerInterface
{
    public function getAllCustomers();
    public function getListeCustomers();
    public function getCustomerById($id);
    public function createCustomer(SalesCustomers $customers);
}
