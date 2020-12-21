<?php

namespace App\Models\DAO;


interface SalesStoresDaoInterface
{
    public function getAllStores();
    public function getStoreById($storeId);

}
