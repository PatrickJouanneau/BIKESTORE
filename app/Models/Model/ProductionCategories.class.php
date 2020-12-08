<?php

namespace App\Models\Model;


class ProductionCategories
{
    private $categoryId;
    private $categoryName;

    function __construct(
        $categoryId,
        $categoryName
    ) {
        $this->categoryId = $categoryId;
        $this->categoryName = $categoryName;
    }

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
        return $this->categoryId = $categoryId;
    }
    public function setCategoryName($categoryName)
    {
        return $this->categoryName = $categoryName;
    }
}
