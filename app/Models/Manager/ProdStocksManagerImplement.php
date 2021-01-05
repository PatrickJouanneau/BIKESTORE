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

    public function getAllStocks()
    {
        return $this->stocksDao->getAllStocks();
    }


    public function getStockbyId($id)
    {
        return $this->stocksDao->getStockById($id);
    }


    public function createStock(ProdStocks $stocks)
    {
        $this->stocksDao->createStock($stocks);
    }

    public function updateStock(ProdStocks $stocks)
    {
        $this->stocksDao->updateStock($stocks);
    }

}
