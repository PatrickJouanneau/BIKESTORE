<?php

namespace App\Models\Manager;

use App\Models\DAO\ProdStocksDaoInterface;
use App\Models\Manager\ProdStocksManagerInterface;


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
}
