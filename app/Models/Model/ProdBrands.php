<?php

namespace App\Models\Model;

use JsonSerializable;

class ProdBrands implements JsonSerializable
{
    private $brandId;
    private string $brandName;

    public function getBrandId()
    {
        return $this->brandId;
    }
    public function getBrandName(): string
    {
        return $this->brandName;
    }


    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;
    }
    public function setBrandName(string $brandName)
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
