<?php

namespace App\Models\DAO;

use App\Models\Model\ProdBrands;


interface ProdBrandsDaoInterface
{
    public function getAllBrands();
    public function getBrandById($brandId);
    public function createBrand(ProdBrands $prodBrands);
    public function updateBrand(ProdBrands $prodBrands);
    public function deleteBrand(ProdBrands $prodBrands);
}
