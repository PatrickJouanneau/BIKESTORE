<?php

namespace App\Models\DAO;


interface ProdProductsDaoInterface
{
    public function getAllProducts();
    public function getProductById($productId);
}
