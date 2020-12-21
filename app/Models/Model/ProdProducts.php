<?php

namespace App\Models\Model;

use App\Models\Model\ProdBrands;
use App\Models\Model\ProdCategories;

class ProdProducts
{
    private $productId;
    private $productName;
    private $modelYear;
    private $listPrice;

    private ProdBrands $productBrand;
    private ProdCategories $productCategory;


    public function getProductId()
    {
        return $this->productId;
    }
    public function getProductName()
    {
        return $this->productName;
    }
    public function getModelYear()
    {
        return $this->modelYear;
    }
    public function getListPrice()
    {
        return $this->listPrice;
    }

    public function getProductBrand(): ProdBrands
    {
        return $this->productBrand;
    }
    public function getProductCategory(): ProdCategories
    {
        return $this->productCategory;
    }



    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }
    public function setModelYear($modelYear)
    {
        $this->modelYear = $modelYear;
    }
    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;
    }

    public function setProductBrand(ProdBrands $productBrand)
    {
        $this->productBrand = $productBrand;
    }
    public function setProductCategory(ProdCategories $productCategory)
    {
        $this->productCategory = $productCategory;
    }
}
