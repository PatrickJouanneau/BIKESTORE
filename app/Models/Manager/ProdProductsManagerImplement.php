<?php

namespace App\Models\Manager;

use App\Models\DAO\ProdProductsDaoInterface;
use app\Models\Manager\ProdProductsManagerInterface;

class ProdProductsManagerImplement implements ProdProductsManagerInterface
{
    private $productsDao;
    public function __construct(ProdProductsDaoInterface $productsDao)
    {
        $this->productsDao = $productsDao;
    }

    public function getAllProducts()
    {
        return $this->productsDao->getAllProducts();
    }
}
