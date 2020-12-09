<?php

namespace App\Models\Manager;

use App\Models\DAO\ProdBrandsDaoImplement;

class ProdBrandsManagerImplement implements ProdBrandsManagerInterface
{
    private $brandsDao;
    public function __construct(ProdBrandsDaoImplement $brandsDao)
    {
        $this->brandsDao = $brandsDao;
    }

    public function getAllBrands()
    {
        return $this->brandsDao->getAllBrands();
    }
}
