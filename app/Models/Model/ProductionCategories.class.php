<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionCategories
{
    use HasFactory;

    private $categoryId = 0;
    private $categoryName = null;

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
