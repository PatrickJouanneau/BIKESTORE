<?php

namespace App\Models\DAO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Model\ProductionBrands;

class BrandDAO
{
    use HasFactory;

    function saveBrand($brand)
    {
        $resultBrand = DB::prepare('INSERT INTO production.brands (brand_name) VALUE (?)');
        $resultBrand->execute(array(
            $brand->getBrandName()
        ));

    }

    function getAllBrands()
    {
        $result = DB::select('SELECT * FROM production.brands');
        return $result;
    }
}
