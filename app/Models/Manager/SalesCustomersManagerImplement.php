<?php

namespace App\Models\Manager;

use App\Models\DAO\SalesCustomersDaoInterface;
use App\Models\Manager\SalesCustomersManagerInterface;
use App\Models\Model\SalesCustomers;

class SalesCustomersManagerImplement implements SalesCustomersManagerInterface
{
    private $customerDao;
    public function __construct(SalesCustomersDaoInterface $customerDao)
    {
        $this->customerDao = $customerDao;
    }


    public function getListeCustomers()
    {
        return $this->customerDao->getListeCustomers();
    }


    public function getAllCustomers()
    {
        return $this->customerDao->getAllCustomers();
    }


    public function getCustomerById($customerId)
    {
        return $this->customerDao->getCustomerById($customerId);
    }


    public function createCustomer(SalesCustomers $customers)
    {
        $this->customerDao->createCustomer($customers);
    }

    public function updateCustomer(SalesCustomers $customers)
    {
        $this->customerDao->updateCustomer($customers);
    }
}
