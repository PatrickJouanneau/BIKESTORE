<?php

namespace App\Models\DAO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Model\ProductionProducts;

class productionProductDAO extends Model
{
    use HasFactory;

function saveProduct()
{
    $results = DB::insert('INSERT INTO production.products (product_id, product_name, brand_id, category_id, model_year, list_price) VALUES (?, ?, ?, ?, ?, ?)', [1, 'Dayle']);
    return $results;
}

function getAllProducts()
{
    $results = DB::select('SELECT * FROM production.products' );
    return $results;
}

}
