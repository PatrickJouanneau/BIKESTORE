<?php

namespace app\Models\Manager;

use App\Models\Model\ProdBrands;

interface ProdBrandsManagerInterface
{
    public function getAllBrands();
    public function getBrandById($brandId);
    public function createBrand(ProdBrands $prodBrands);
    public function updateBrand(ProdBrands $prodBrands);
    public function deleteBrand(ProdBrands $prodBrands);
}
