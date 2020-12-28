<?php

namespace App\Models\Manager;

use App\Models\DAO\ProdProductsDaoInterface;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Model\ProdProducts;

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


    public function countProdProductsWithCategoryId($categoryId)
    {
        return $this->productsDao->countProdProductsWithCategoryId($categoryId);
    }


    public function countProdProductsWithBrandId($brandId)
    {
        return $this->productsDao->countProdProductsWithBrandId($brandId);
    }

    public function getProductById($productId)
    {
        return $this->productsDao->getProductById($productId);
    }

    public function createProduct(ProdProducts $products)
    {
        $this->productsDao->createProduct($products);
    }
}
