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

    function saveCategorie($categorie)
    {
        $resultCategorie = DB::prepere('INSERT INTO production.categories (category_name) VALUE (?)');
        $resultCategorie->execute(array(
            $categorie->getCategorieName()
        ));
    }

    
    function getAllCategories()
    {
        $result = DB::selest('SELECT * FROM production.categories');
        return $result;
    }
}
