<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\DAO\ProdCategoriesDaoInterface;
use App\Models\Model\ProdCategories;
use Exception;
use Illuminate\Support\Facades\Log;

class ProdCategoriesDaoImplement implements ProdCategoriesDaoInterface
{
    public function getAllCategories()
    {
        try {
            $resultBdd = DB::select('SELECT * FROM production.categories ORDER BY category_name');

            $allCategories = [];
            foreach ($resultBdd as $i => $row) {
                $category = new ProdCategories();
                $category->setCategoryId($row->category_id);
                $category->setCategoryName($row->category_name);

                array_push($allCategories, $category);
            }
            return $allCategories;

        } catch (Exception $e){
            Log::error('$e');
        }

    }


    public function getCategoryById($categoryId)
    {
        try {
            $bdd = DB::getPdo();
            $reponse = $bdd->query("SELECT * FROM production.categories WHERE category_id='" . $categoryId . "'");
            $resultBdd = $reponse->fetch();

            $category = new ProdCategories();
            $category->setCategoryId($resultBdd['category_id']);
            $category->setCategoryName($resultBdd['category_name']);

            return $category;

        } catch (Exception $e){
            Log::error('$e');
        }

    }


    public function createCategory(ProdCategories $categories)
    {
        try {
            DB::insert("INSERT INTO production.categories (category_name) VALUES (?)", [$categories->getCategoryName()]);

        } catch (Exception $e){
            Log::error('$e');
        }

    }


    public function updateCategory(ProdCategories $categories)
    {
        try {
            DB::update("UPDATE production.categories set category_name = ? WHERE category_id = ?", [$categories->getCategoryName(), $categories->getCategoryId()]);

        } catch (Exception $e){
            Log::error('$e');
        }

    }



    public function deleteCategoryById($categoryId)
    {
        try {
            DB::delete("DELETE FROM production.categories WHERE category_id = ? ", [$categoryId]);

        } catch (Exception $e){
            Log::error('$e');
        }

    }
}
