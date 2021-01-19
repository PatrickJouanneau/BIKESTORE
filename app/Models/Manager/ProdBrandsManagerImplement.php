<?php

namespace App\Models\Manager;

use App\Exceptions\CategoryException;
use App\Models\DAO\ProdBrandsDaoInterface;
use App\Models\Manager\ProdBrandsManagerInterface;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Model\ProdBrands;


class ProdBrandsManagerImplement implements ProdBrandsManagerInterface
{
    private $brandsDao;
    private $ProdProductsManagerInterface;
    public function __construct(
        ProdBrandsDaoInterface $brandsDao,
        ProdProductsManagerInterface $ProdProductsManagerInterface
    ) {
        $this->brandsDao = $brandsDao;
        $this->ProdProductsManagerInterface = $ProdProductsManagerInterface;
    }


    public function getAllBrands()
    {
        return $this->brandsDao->getAllBrands();
    }


    public function getBrandById($id)
    {
        return $this->brandsDao->getBrandById($id);
    }


    public function createBrand(ProdBrands $brands)
    {
        $this->brandsDao->createBrand($brands);
    }


    public function updateBrand(ProdBrands $brands)
    {
        $this->brandsDao->updateBrand($brands);
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
