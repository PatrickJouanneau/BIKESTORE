<?php

namespace App\Models\Manager;

use App\Models\DAO\SalesCustomersDaoInterface;
use App\Models\Manager\SalesCustomersManagerInterface;

class SalesCustomersManagerImplement implements SalesCustomersManagerInterface
{
    private $customerDao;
    public function __construct(SalesCustomersDaoInterface $customerDao)
    {
        $this->customerDao = $customerDao;
    }

    public function getAllCustomers()
    {
        return $this->customerDao->getAllCustomers();
    }
    public function getCustomerById()
    {
        return $this->customerById->getCustomerById;
    }
}
