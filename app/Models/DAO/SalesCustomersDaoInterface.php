<?php

namespace App\Models\DAO;

interface SalesCustomersDaoInterface
{
    public function getAllCustomers();
    public function getCustomerById($customerId);
}

