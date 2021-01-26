<?php

namespace App\Models\Manager;

use App\Models\Model\SalesStores;

interface SalesStoresManagerInterface
{
    public function getAllStores();
    public function getStoreById($storeId);
    public function createStore(SalesStores $stores);
    public function updateStore(SalesStores $stores);
}
