<?php

namespace App\Models\DAO;

interface ProdCategoriesDaoInterface
{
    public function getAllCategories();
    public function getCategoryById($categoryId);
}
