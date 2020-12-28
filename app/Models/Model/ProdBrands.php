<?php

namespace App\Models\Model;

use JsonSerializable;

class ProdBrands implements JsonSerializable
{
    private $brandId;
    private $brandName;

    public function getBrandId()
    {
        return $this->brandId;
    }
    public function getBrandName()
    {
        return $this->brandName;
    }


    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;
    }
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;
    }

    
    public function jsonSerialize()
    {
        return [
            "id" => $this->brandId,
            "name" => $this->brandName
        ];
    }
}
