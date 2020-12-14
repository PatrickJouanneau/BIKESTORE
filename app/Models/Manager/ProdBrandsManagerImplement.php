<?php

namespace App\Models\Manager;

//use App\Models\DAO\ProdBrandsDaoImplement;
use App\Models\DAO\ProdBrandsDaoInterface;
use app\Models\Manager\ProdBrandsManagerInterface;

class ProdBrandsManagerImplement implements ProdBrandsManagerInterface
{
    private $brandsDao;
    public function __construct(ProdBrandsDaoInterface $brandsDao)
    {
        $this->brandsDao = $brandsDao;
    }

    public function getAllBrands()
    {
        return $this->brandsDao->getAllBrands();
    }
}
