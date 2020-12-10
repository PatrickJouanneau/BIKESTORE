<?php

namespace App\Models\Model;


class ProdBrands
{
    private $brandId;
    private string $brandName;

    /*
    public function __construct(
        $brandId,
        $brandName
    ) {
        $this->brandId = $brandId;
        $this->brandName = $brandId;
    }
*/
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
}
