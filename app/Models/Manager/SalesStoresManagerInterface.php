<?php

namespace App\Models\Manager;


interface SalesStoresManagerInterface
{
    public function getAllStores();
    public function getStoreById($storeId);
}
