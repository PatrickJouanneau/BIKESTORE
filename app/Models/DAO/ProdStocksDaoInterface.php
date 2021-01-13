<?php

namespace App\Models\DAO;

use App\Models\Model\ProdStocks;

interface ProdStocksDaoInterface
{
    public function getListeStocks();
    public function getAllStocks();
    public function getStockById($storeId, $productId);
    public function createStock($stocks, $storeId, $productId);
    public function updateStock(ProdStocks $stocks);

}
