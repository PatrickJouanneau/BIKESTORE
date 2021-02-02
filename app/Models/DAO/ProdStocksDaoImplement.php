<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\DAO\ProdStocksDaoInterface;
use App\Models\DAO\ProdProductsDaoInterface;
use App\Models\DAO\SalesStoresDaoInterface;
use App\Models\Model\ProdStocks;
use App\Exceptions\DaoException;
use Exception;
use Illuminate\Support\Facades\Log;


class ProdStocksDaoImplement implements ProdStocksDaoInterface
{
    private $productDao;
    private $storeDao;

    public function __construct(
        ProdProductsDaoInterface $productDao,
        SalesStoresDaoInterface $storeDao
    ) {
        $this->productDao = $productDao;
        $this->storeDao   = $storeDao;
    }


    public function getListeStocks()
    {
        try {

            $bdd = DB::getPdo();
            $reponse = $bdd->query("SELECT TOP 10 * FROM  production.stocks JOIN production.products ON production.stocks.product_id = production.products.product_id ORDER BY product_name DESC");
            $resultBdd = $reponse->fetchAll();

            $allStocks = [];
            foreach ($resultBdd as $i => $row) {
                $stock = new ProdStocks();
                $stock->setQuantity($row['quantity']);

                //error_log('valeur de $row[\'product_id\'] :' . $row['product_id']);
                $product = $this->productDao->getProductById($row['product_id']);
                $stock->setProdProduct($product);

                $store = $this->storeDao->getStoreById($row['store_id']);
                $stock->setSalesStore($store);

                array_push($allStocks, $stock);
            }
            return $allStocks;

            /*
            $resultBdd = DB::select('exec dbo.get_liste_stocks');

            $listeStocks = [];
            foreach ($resultBdd as $i => $row) {
                $stock = new ProdStocks();
                $stock->setQuantity($row->quantity);

                $product = $this->productDao->getProductById($row->product_id);
                $stock->setProdProduct($product);

                $store = $this->storeDao->getStoreById($row->store_id);
                $stock->setSalesStore($store);

                array_push($listeStocks, $stock);
            }
            return $listeStocks;
            */
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }



    public function getAllStocks()
    {
        try {
            $resultBdd = DB::select('exec dbo.get_all_stocks');

            $allStocks = [];
            foreach ($resultBdd as $i => $row) {
                $stock = new ProdStocks();
                $stock->setQuantity($row->quantity);

                $product = $this->productDao->getProductById($row->product_id);
                $stock->setProdProduct($product);

                $store = $this->storeDao->getStoreById($row->store_id);
                $stock->setSalesStore($store);

                array_push($allStocks, $stock);
            }
            return $allStocks;
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }



    public function getStockById($storeId, $productId)
    {
        try {
            $resultBdd = DB::select("SELECT * FROM production.stocks WHERE store_id='" . $storeId . "'  and product_id='" . $productId . "'");

            $stock = new ProdStocks();
            /*
            $stock->setQuantity($resultBdd[0]->quantity);

            $product = $this->productDao->getproductById($resultBdd[0]->product_id);
            $store = $this->storeDao->getStoreById($resultBdd[0]->store_id);
            */
            $stock->setQuantity($resultBdd['quantity']->quantity);

            $product = $this->productDao->getproductById($resultBdd['product_id']);
            $store = $this->storeDao->getStoreById($resultBdd['store_id']);

            $stock->setProdProduct($product);
            $stock->setSalesStore($store);

            return $stock;
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }

    public function createStock($stock)
    {
        try {
            DB::insert("INSERT INTO production.stocks(store_id, product_id, quantity) VALUES (?, ?, ?)", [
                $stock->getSalesStore()->getStoreId(),
                $stock->getProdProduct()->getProductId(),
                $stock->getQuantity()
            ]);
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }

    public function updateStock($stock)
    {
        try {
            DB::update("UPDATE production.stocks SET
                 store_id    = ?,
                 product_id  = ?,
                 quantity    = ?
        ", [
                $stock->getSalesStore()->getStoreId(),
                $stock->getProdProduct()->getProductId(),
                $stock->getQuantity()
            ]);
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }


    public function getStockBrand()
    {
        try {
            return DB::select("exec dbo.get_stock_by_brands");
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }

    public function getStockCategory()
    {
        try {
            return DB::select("exec dbo.get_stock_by_category");
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }
}
