<?php

namespace App\Models\Manager;

use App\Exceptions\CategoryException;
use App\Models\DAO\ProdBrandsDaoInterface;
use app\Models\Manager\ProdBrandsManagerInterface;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Model\ProdBrands;


class ProdBrandsManagerImplement implements ProdBrandsManagerInterface
{
    private $brandsDao;
    public function __construct(
        ProdBrandsDaoInterface $brandsDao
    ) {
        $this->brandsDao = $brandsDao;
    }


    public function getAllBrands()
    {
        return $this->brandsDao->getAllBrands();
    }


    public function getBrandById($brandId)
    {
        return $this->brandsDao->getBrandById($brandId);
    }


    public function createBrand(ProdBrands $prodBrands)
    {
        $this->brandsDao->createBrand($prodBrands);
    }


    public function updateBrand(ProdBrands $prodBrands)
    {
        $this->brandsDao->updateBrand($prodBrands);
    }


    public function deleteBrandById($brandId)
    {
        if ($this->ProdProductsManagerInterface->countProdProductsWithBrandId($brandId) == 0) {
            $this->brandsDao->deleteBrandById($brandId);
        } else {
            throw new CategoryException("Des produits sont liés à cette marque.");
        }
    }
}
