<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionBrands
{
    use HasFactory;

    private $brandId = 0;
    private $brandName = null;

    function __construct($brandId, $brandName)
    {
        $this->brandId = $brandId;
        $this->brandName = $brandName;
    }

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
        return $this->brandId = $brandId;
    }
    public function setBrandName($brandName)
    {
        return $this->brandName = $brandName;
    }

}
