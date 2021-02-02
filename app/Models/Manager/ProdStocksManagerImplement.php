<?php

namespace App\Models\Manager;

use App\Models\DAO\ProdStocksDaoInterface;
use App\Models\Manager\ProdStocksManagerInterface;
use App\Models\Model\ProdStocks;

class ProdStocksManagerImplement implements ProdStocksManagerInterface
{
    private $stocksDao;
    public function __construct(ProdStocksDaoInterface $stocksDao)
    {
        $this->stocksDao = $stocksDao;
    }



    public function getListeStocks()
    {
        return $this->stocksDao->getListeStocks();
    }



    public function getAllStocks()
    {
        return $this->stocksDao->getAllStocks();
    }



    public function getStockbyId($storeId, $productId)
    {
        return $this->stocksDao->getStockById($storeId, $productId);
    }



    public function createStock($stocks)
    {
        $this->stocksDao->createStock($stocks);
    }



    public function updateStock($stock)
    {
        $this->stocksDao->updateStock($stock);
    }



    public function getStockBrand()
    {
        return $this->stocksDao->getStockBrand();
    }



    public function getStockCategory()
    {
        return $this->stocksDao->getStockCategory();
    }
}
