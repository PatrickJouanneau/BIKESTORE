<?php

namespace App\Models\Manager;

use App\Models\DAO\ProdProductsDaoImplement;

class ProdProductsManagerImplement implements ProdProductsManagerInterface
{
    private $productsDao;
    public function __construct(ProdProductsDaoImplement $productsDao)
    {
        $this->productsDao = $productsDao;
    }

    public function getAllProducts()
    {
        return $this->productsDao->getAllProducts();
    }
}
