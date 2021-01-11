<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\DAO\ProdStocksDaoInterface;
use App\Models\DAO\ProdProductsDaoInterface;
use App\Models\DAO\SalesStoresDaoInterface;
use App\Models\Model\ProdStocks;
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
        $this->storeDao = $storeDao;
    }


    public function getListeStocks()
    {
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
    }



    public function getAllStocks()
    {
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
    }



    public function getStockById($storeId, $productId)
    {
        
        try {
            $resultBdd = DB::select("SELECT * FROM production.stocks WHERE store_id='" . $storeId . "'  and product_id='".$productId."'");

            $stock = new ProdStocks();
            $stock->setQuantity($resultBdd[0]->quantity);

            $product = $this->productDao->getproductById($resultBdd[0]->product_id);
            $store = $this->storeDao->getStoreById($resultBdd[0]->store_id);

            $stock->setProdProduct($product);
            $stock->setSalesStore($store);

            return $stock;
        } catch (Exception $e) {
            Log::error('$e');
        }
    }

    public function createStock($stock)
    {
        DB::insert("INSERT INTO production.stocks(store_id, product_id, quantity) VALUES (?, ?, ?)", [
            $stock->getSalesStore()->getStoreId(),
            $stock->getProdProduct()->getProductId(),
            $stock->getQuantity()
        ]);
    }

    public function updateStock(ProdStocks $stocks)
    {
        DB::update("UPDATE production.stocks SET
            store_id = ?,
            product_id = ?,
            quantity = ?
        ", [
            $stocks->getSalesStore()->getStoreId(),
            $stocks->getProdProduct()->getProductId(),
            $stocks->getQuantity(),
        ]);
    }





    /* VOIR SI C'EST BON ?
    public function getStockskByStoreAndYear()
    {
        $resultBdd = DB::select("SELECT product_name, quantity, store_name, model_year, list_price
        FROM production.stocks stk
            INNER JOIN production.products prod ON prod.product_id = stk.product_id
            INNER join sales.stores mag ON mag.store_id = stk.store_id
        WHERE store_id = ?  AND model_year = ?
        ORDER BY [product_name];");

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
    }
    */
}
