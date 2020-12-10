<?php

namespace App\Models\DAO;


use Illuminate\Support\Facades\DB;
use App\Models\Model\ProdCategories;
use App\Models\DAO\ProdCategoriesDaoInterface;

class ProdCategoriesDaoImplement implements ProdCategoriesDaoInterface
{

    function saveCategory($productionCategories)
    {
        $results = DB::insert('INSERT INTO production.categories (category_name) VALUE (?)', [1, 1, 'Dayle']);
        return $results;
    }


    function getAllCategories()
    {
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.categories");
        $resultBdd = $reponse->fetchAll();

        $allCategories = [];
        foreach ($resultBdd as $i => $row) {
            $category = new ProdCategories($row['category_id'], $row['category_name']);
            $category->setCategoryId($row['category_id']);
            $category->setCategoryName($row['category_name']);
            array_push($allCategories, $category);
        }
        return $allCategories;
    }
}
