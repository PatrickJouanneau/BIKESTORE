<?php

namespace App\Models\Manager;


interface ProdProductsManagerInterface
{
   public function getAllProducts();
   public function countProdProductsWithCategoryId($categoryId);
   public function countProdProductsWithBrandId($brandId);

}

