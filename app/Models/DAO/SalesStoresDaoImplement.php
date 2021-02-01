<?php

namespace App\Models\DAO;

use App\Exceptions\DaoException;
use Illuminate\Support\Facades\DB;
use App\Models\Model\SalesStores;
use App\Models\DAO\SalesStoresDaoInterface;
use Exception;
use Illuminate\Support\Facades\Log;

class SalesStoresDaoImplement implements SalesStoresDaoInterface
{
    public function getAllStores()
    {
        try {
            $resultBdd = DB::select("SELECT * FROM sales.stores ORDER BY store_id DESC");

            $allStores = [];
            foreach ($resultBdd as $i => $row) {
                $store = new SalesStores();
                $store->setStoreId($row->store_id);
                $store->setStoreName($row->store_name);
                $store->setPhone($row->phone);
                $store->setEmail($row->email);
                $store->setStreet($row->street);
                $store->setCity($row->city);
                $store->setState($row->state);
                $store->setZipCode($row->zip_code);

                array_push($allStores, $store);
            }
            return $allStores;
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }



    public function getStoreById($storeId)
    {
        try {
            $bdd = DB::getPdo();
            $reponse = $bdd->query(
                "SELECT * FROM sales.stores WHERE store_id='" . $storeId . "'"
            );
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
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }



    public function createStore(SalesStores $store)
    {
        try {
            DB::insert(
                "INSERT INTO sales.stores
                (store_name, phone, email, street, city, state, zip_code)
        VALUES (?, ?, ?, ?, ?, ?, ? )",
                [
                    $store->getStoreName(),
                    $store->getPhone(),
                    $store->getEmail(),
                    $store->getStreet(),
                    $store->getCity(),
                    $store->getState(),
                    $store->getZipCode()
                ]
            );
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }



    public function updateStore($store)
    {
        try {
            DB::update("UPDATE sales.stores SET
            store_name = ?,
            phone = ?,
            email = ?,
            street = ?,
            city = ?,
            state = ?,
            zip_code = ?
        WHERE store_id = ?
        ", [
                $store->getStoreName(),
                $store->getPhone(),
                $store->getEmail(),
                $store->getStreet(),
                $store->getCity(),
                $store->getState(),
                $store->getZipCode(),
                $store->getStoreId()
            ]);
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }
}
