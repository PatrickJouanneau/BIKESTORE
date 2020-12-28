<?php

namespace App\Models\DAO;

use App\Models\Model\SalesCustomers;


interface SalesCustomersDaoInterface
{
    public function getAllCustomers();
    public function getCustomerById($id);
    public function createCustomer(SalesCustomers $customers);
}

