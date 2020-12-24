<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\ProdStocks;
use App\Models\DAO\ProdStocksDaoInterface;


class ProdStocksDaoImplement implements ProdStocksDaoInterface
{
    private $productDao;
    private $storeDao;
    public function __construct(ProdProductsDaoInterface $productDao, SalesStoresDaoInterface $storeDao)
    {
        $this->productDao = $productDao;
        $this->storeDao = $storeDao;
    }


    public function getAllStocks()
    {
        $resultBdd = DB::select("exec get_all_stocks");

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
}
