<?php

namespace App\Models\Manager;

use App\Models\Model\ProdProducts;

interface ProdProductsManagerInterface
{
   public function getAllProducts();
   public function countProdProductsWithCategoryId($categoryId);
   public function countProdProductsWithBrandId($brandId);
   public function getProductById($productId);
   public function createProduct(ProdProducts $products);

}

