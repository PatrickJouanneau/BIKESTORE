<?php

namespace App\Models\DAO;

use App\Models\Model\ProdProducts;

interface ProdProductsDaoInterface
{
    public function getAllProducts();
    public function getProductById($productId);
    public function countProdProductsWithCategoryId($categoryId);
    public function countProdProductsWithBrandId($brandId);
    public function searchProduct(ProdProducts $products);
    public function createProduct(ProdProducts $products);
    public function updateProduct(ProdProducts $products);
    public function deleteProductById($productId);
}
