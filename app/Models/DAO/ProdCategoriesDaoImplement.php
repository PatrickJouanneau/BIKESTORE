<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\ProdCategories;
use App\Models\DAO\ProdCategoriesDaoInterface;

class prodCategoriesDaoImplement implements ProdCategoriesDaoInterface
{
    function saveCategory($productionCategories)
    {
        $results = DB::insert('INSERT INTO production.categories (category_name) VALUE (?)');
        return $results;
    }


    function getAllCategories()
    {
        //$bdd = DB::getPdo();
        //$reponse = $bdd->query("SELECT * FROM production.categories ORDER BY category_name");
        //$resultBdd = $reponse->fetchAll();

        $resultBdd = DB::select('SELECT * FROM production.categories ORDER BY category_name');

        $allCategories = [];
        foreach ($resultBdd as $i => $row) {
            $category = new ProdCategories();
            $category->setCategoryId($row->category_id);
            $category->setCategoryName($row->category_name);
            array_push($allCategories, $category);
        }
        return $allCategories;
    }


    function getCategoryById($categoryId)
    {
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.categories WHERE category_id='" . $categoryId . "'");
        $resultBdd = $reponse->fetch();

        //$resultBdd = DB::select("SELECT * FROM production.categories WHERE category_id = ? ", [$categoryId]);

        $category = new ProdCategories();
        $category->setCategoryId($resultBdd['category_id']);
        $category->setCategoryName($resultBdd['category_name']);

        return $category;
    }
}
