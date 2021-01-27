<?php

namespace App\Models\Model;


use JsonSerializable;

class ProdProductAudit implements JsonSerializable
{
    private $changeId;
    private $productId;
    private $productName;
    private $brandId;
    private $categoryId;
    private $modelYear;
    private $listPrice;
    private $updated;
    private $operation;


    public function getChangeId()
    {
        return $this->changeId;
    }
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
    public function getBrandId()
    {
        return $this->brandId;
    }
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    public function getListPrice()
    {
        return $this->listPrice;
    }
    public function getupdated()
    {
        return $this->updated;
    }
    public function getOperation()
    {
        return $this->operation;
    }


    public function setChangeId($changeId)
    {
        $this->changeId = $changeId;
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
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;
    }
    public function setCategotyId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;
    }
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
    public function setOption($option)
    {
        $this->option = $option;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
