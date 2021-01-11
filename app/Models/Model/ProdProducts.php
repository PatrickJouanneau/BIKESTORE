<?php

namespace App\Models\Model;

use App\Models\Model\ProdBrands;
use App\Models\Model\ProdCategories;
use JsonSerializable;

class ProdProducts implements JsonSerializable
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

    public function jsonSerialize()
    {
        $arr = [];

        if($this->productId != null){
            $arr["id"] = $this->productId;
        }
        if($this->productName != null){
            $arr["name"] = $this->productName;
        }
        if($this->modelYear != null){
            $arr["year"] = $this->modelYear;
        }
        if($this->listPrice != null){
            $arr["price"] = $this->listPrice;
        }
        if(isset($this->productBrand) && $this->productBrand->getBrandName() != null){
            $arr["brand"] = $this->productBrand->getBrandName();
        }
        if(isset($this->productCategory) && $this->productCategory->getCategoryName() != null){
            $arr["category"] = $this->productCategory->getCategoryName();
        }

        return $arr;
    }
}
