<?php

namespace App\Models\DAO;

use App\Models\Model\ProdCategories;

interface ProdCategoriesDaoInterface
{
    public function getAllCategories();
    public function getCategoryById($categoryId);
    public function createCategory(ProdCategories $prodCategories);
    public function updateCategory(ProdCategories $prodCategories);
    public function deleteCategoryById(ProdCategories $prodCategories);
}
