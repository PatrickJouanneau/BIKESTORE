<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionProducts
{
    use HasFactory;

    private $productId = 0;
    private $productName = null;
    private $modelYear = null;
    private $listPrice = 0;

    function __construct($productId, $productName, $modelYear, $listPrice)
    {
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
        return $this->productId = $productId;
    }
    public function setProductName($productName)
    {
        return $this->productName = $productName;
    }
    public function setModelYear($modelYear)
    {
        return $this->modelYear = $modelYear;
    }
    public function setListPrice($listPrice)
    {
        return $this->listPrice = $listPrice;
    }



}
