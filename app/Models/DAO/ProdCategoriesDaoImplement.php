<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\DAO\ProdCategoriesDaoInterface;
use App\Models\Model\ProdCategories;
use App\Exceptions\DaoException;
use Exception;
use Illuminate\Support\Facades\Log;

class ProdCategoriesDaoImplement implements ProdCategoriesDaoInterface
{
    public function getAllCategories()
    {
        try {
            //$resultBdd = DB::select('SELECT * FROM production.categories ORDER BY category_name');
            $resultBdd = DB::select('exec dbo.get_all_categories');

            $allCategories = [];
            foreach ($resultBdd as $i => $row) {
                $category = new ProdCategories();
                $category->setCategoryId($row->category_id);
                $category->setCategoryName($row->category_name);

                array_push($allCategories, $category);
            }
            return $allCategories;
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
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
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }


    public function createCategory(ProdCategories $categories)
    {
        try {
            DB::insert("INSERT INTO production.categories (category_name) VALUES (?)", [$categories->getCategoryName()]);
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }


    public function updateCategory(ProdCategories $categories)
    {
        try {
            DB::update("UPDATE production.categories set category_name = ? WHERE category_id = ?", [$categories->getCategoryName(), $categories->getCategoryId()]);
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }



    public function deleteCategoryById($categoryId)
    {
        try {
            DB::delete("DELETE FROM production.categories WHERE category_id = ? ", [$categoryId]);
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }
}
