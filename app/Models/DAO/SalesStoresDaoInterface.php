<?php

namespace App\Models\Dao;


interface SalesStoresDaoInterface
{
    public function getAllStores();
    public function getStoreById($storeId);

}
