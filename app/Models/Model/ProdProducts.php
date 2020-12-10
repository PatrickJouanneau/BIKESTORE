<?php

namespace App\Models\Model;


class ProdProducts
{
    private $productId;
    private $productName;
    private $modelYear;
    private $listPrice;

    function __construct(
        $productId,
        $productName,
        $modelYear,
        $listPrice
    ) {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->modelYear = $modelYear;
        $this->listPrice = $listPrice;
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
    public function getListPrice()
    {
        return $this->listPrice;
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
}
