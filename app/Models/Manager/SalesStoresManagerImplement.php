<?php

namespace App\Models\Manager;

use App\Models\DAO\SalesStoresDaoInterface;
use App\Models\Manager\SalesStoresManagerInterface;

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
}
