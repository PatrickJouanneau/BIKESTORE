<?php

namespace App\Models\Manager;

use App\Models\Model\ProdStocks;

interface ProdStocksManagerInterface
{
    public function getListeStocks();
    public function getAllStocks();
    public function getStockById($storeId, $productId);
    public function createStock(ProdStocks $stocks);
    public function updateStock(ProdStocks $stocks);
}
