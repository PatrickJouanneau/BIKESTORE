<?php

namespace App\Models\Manager;

use App\Models\Model\ProdStocks;

interface ProdStocksManagerInterface
{
    public function getAllStocks();
    public function getStockById($stockId);
    public function createStock(ProdStocks $stocks);
    public function updateStock(ProdStocks $stocks);
}
