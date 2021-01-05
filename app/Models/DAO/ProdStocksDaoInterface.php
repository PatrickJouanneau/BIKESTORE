<?php

namespace App\Models\DAO;

use App\Models\Model\ProdStocks;

interface ProdStocksDaoInterface
{
    public function getAllStocks();
    public function getStockById($stockId);
    public function createStock(ProdStocks $stocks);
    public function updateStock(ProdStocks $stocks);

}
