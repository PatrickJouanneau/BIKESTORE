<?php

namespace App\Models\DAO;


interface ProdBrandsDaoInterface
{
    public function getAllBrands();
    public function getBrandById($brandId);
}
