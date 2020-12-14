<?php

namespace App\Models\Model;


class ProdCategories
{
    private $categoryId;
    private $categoryName;

    
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    public function getCategoryName()
    {
        return $this->categoryName;
    }


    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }
}
