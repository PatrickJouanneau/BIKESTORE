<?php

namespace App\Models\DAO;


interface ProdBrandsDaoInterface
{
    public function getAllBrands();
    public function getBrandById($brandId);
    //public function createBrand($brand);
    //public function updateBrand($brandId);
}
