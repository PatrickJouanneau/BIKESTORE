<?php

namespace App\Models\Manager;

use App\Models\Model\ProdCategories;


interface ProdCategoriesManagerInterface
{
    public function getAllCategories();
    public function getCategoryById($categoryId);
    public function createCategory(ProdCategories $prodCategories);
    public function updateCategory(ProdCategories $prodCategories);
    public function deleteCategoryById($categoryId);
}
