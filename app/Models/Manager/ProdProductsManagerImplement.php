<?php

namespace App\Models\Manager;

use App\Exceptions\ProductException;
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

    public function getListProducts()
    {
        return $this->productsDao->getListProducts();
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



    public function updateProduct(ProdProducts $products)
    {
        $this->productsDao->updateProduct($products);
    }

    public function searchProduct($keyword)
    {
        return $this->productsDao->searchProduct($keyword);
    }


    public function deleteProductById($productId)
    {
        if ($this->SalesOrderItemsManagerInterface->countSalesOrderItemsWithProductId($productId) == 0) {
            $this->productsDao->deleteproductById($productId);
        } else {
            throw new ProductException("Des ordres sont liés à ce produit");
        }
    }
}
