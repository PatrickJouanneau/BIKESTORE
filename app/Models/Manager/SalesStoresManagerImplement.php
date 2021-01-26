<?php

namespace App\Models\Manager;

use App\Exceptions\SalesExceptions;
use App\Models\DAO\SalesStoresDaoInterface;
use App\Models\Manager\SalesStoresManagerInterface;
use App\Models\Model\SalesStores;

class SalesStoresManagerImplement implements SalesStoresManagerInterface
{
    private $storeDao;
    public function __construct(SalesStoresDaoInterface $storeDao)
    {
        $this->storeDao = $storeDao;
    }



    public function getAllStores()
    {
        return $this->storeDao->getAllStores();
    }



    public function getStoreById($storeId)
    {
        return $this->storeDao->getStoreById($storeId);
    }



    
    public function createStore(SalesStores $stores)
    {
        $this->storeDao->createStore($stores);
    }



    public function updateStore(SalesStores $stores)
    {
        $this->storeDao->updateStore($stores);
    }
}
