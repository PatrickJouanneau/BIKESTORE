<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\DAO\ProdCategoriesDaoInterface;
use App\Models\Model\ProdCategories;


class prodCategoriesDaoImplement implements ProdCategoriesDaoInterface
{
    public function getAllCategories()
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


    public function getCategoryById($categoryId)
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


    public function createCategory($prodCategories)
    {
        $resultBdd = DB::insert("INSERT INTO production.categories (category_name) VALUES (?)", [$prodCategories->getCategoryName()]);
    }


    public function updateCategory($prodCategories)
    {
        $resultBdd = DB::update("UPDATE production.categories SET category_name = ? WHERE category_id = ?", [$prodCategories->getCategoryName(), $prodCategories->getCategoryId()]);
    }


    public function deleteCategoryById($categoryId)
    {
        $resultBdd = DB::delete("DELETE FROM production.categories WHERE category_id = ? ", [$categoryId]);
    }
}
