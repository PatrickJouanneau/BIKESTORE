<?php

namespace App\Models\Model;

class ProdBrands
{
    private $brandId;
    private string $brandName;

    function __construct(
        $brandId,
        $brandName
    ) {
        $this->brandId = $brandId;
        $this->brandName = $brandName;
    }

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
        return $this->brandId = $brandId;
    }
    public function setBrandName(string $brandName)
    {
        return $this->brandName = $brandName;
    }
}
