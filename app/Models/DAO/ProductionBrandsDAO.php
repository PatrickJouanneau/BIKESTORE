<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\ProductionBrands;

class BrandDAO
{

    function saveBrand($productionBrands)
    {
        $results = DB::insert('INSERT INTO production.brands (brands_id, brans_name) VALUES (?, ?)', [1, 'Dayle']);
        return $results;
    }

    function getAllBrands()
    {
        $results = DB::select('SELECT * FROM production.brands');
        return $results;
    }
}
