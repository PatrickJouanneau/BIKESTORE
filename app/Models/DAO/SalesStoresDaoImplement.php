<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\SalesStores;
use App\Models\DAO\SalesStoresDaoInterface;

class SalesStoresDaoImplement implements SalesStoresDaoInterface
{
    public function getAllStores()
    {
        $bdd = DB::getPdo();
        $reponse = $bdd->query('SELECT * FROM sales.stores');
        $resultBdd = $reponse->fetchAll();

        $allStores = [];
        foreach ($resultBdd as $i => $row) {
            $store = new SalesStores();
            $store->setStoreId($row['store_id']);
            $store->setStoreName($row['store_name']);
            $store->setPhone($row['phone']);
            $store->setEmail($row['email']);
            $store->setStreet($row['street']);
            $store->setCity($row['city']);
            $store->setState($row['state']);
            $store->setZipCode($row['zip_code']);

            array_push($allStores, $store);
        }
        return $allStores;
    }

    public function getStoreById($storeId)
    {
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM sales.stores WHERE store_id='" . $storeId . "'");
        $resultBdd = $reponse->fetch();

        $store = new SalesStores();
        $store->setStoreId($resultBdd['store_id']);
        $store->setStoreName($resultBdd['store_name']);
        $store->setPhone($resultBdd['phone']);
        $store->setEmail($resultBdd['email']);
        $store->setStreet($resultBdd['street']);
        $store->setCity($resultBdd['city']);
        $store->setState($resultBdd['state']);
        $store->setZipCode($resultBdd['zip_code']);

        return $store;
    }
}
