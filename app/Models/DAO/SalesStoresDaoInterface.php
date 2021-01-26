<?php

namespace App\Models\DAO;
use App\Models\Model\SalesStores;

interface SalesStoresDaoInterface
{
    public function getAllStores();
    public function getStoreById($storeId);
    public function createStore(SalesStores $stores);
    public function updateStore(SalesStores $stores);

}
