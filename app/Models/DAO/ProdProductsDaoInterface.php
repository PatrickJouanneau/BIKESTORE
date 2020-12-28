<?php

namespace App\Models\DAO;


interface ProdProductsDaoInterface
{
    public function getAllProducts();
    public function getProductById($productId);
    public function countProdProductsWithCategoryId($categoryId);
    public function countProdProductsWithBrandId($brandId);
    public function createProduct($products);
}
