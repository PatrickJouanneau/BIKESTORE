<?php

namespace App\Models\DAO;

use App\Models\Model\ProdStocks;

interface ProdStocksDaoInterface
{
    public function getListeStocks();
    public function getAllStocks();
    public function getStockById($storeId, $productId);
    public function createStock($stock);
    public function updateStock(ProdStocks $stocks);
    public function getStockBrand();
    public function getStockCategory();
}
