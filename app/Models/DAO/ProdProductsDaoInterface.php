<?php

namespace App\Models\DAO;

use App\Models\Model\ProdProducts;

interface ProdProductsDaoInterface
{
    public function getAllProducts();
    public function getListProducts();
    public function getProductById($productId);
    public function countProdProductsWithCategoryId($categoryId);
    public function countProdProductsWithBrandId($brandId);
    public function searchProduct();
    public function createProduct(ProdProducts $products);
    public function updateProduct(ProdProducts $products);
    public function deleteProductById($productId);
}
