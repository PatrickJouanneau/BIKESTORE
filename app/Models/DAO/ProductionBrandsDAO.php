<?php

namespace App\Models\DAO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Model\ProductionBrands;

class BrandDAO
{
    use HasFactory;

    function saveBrand()
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
