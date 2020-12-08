<?php

namespace App\Models\DAO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Model\ProductionCategories;
use GrahamCampbell\ResultType\Result;

class CategoriesDAO extends Model
{
    use HasFactory;

    function saveCategorie()
    {
        $results = DB::insert('INSERT INTO production.categories (category_name) VALUE (?)', [1, 1, 'Dayle']);
        return $results;

    }


    function getAllCategories()
    {
        $results = DB::select('SELECT * FROM production.categories');
        return $results;
    }
}
