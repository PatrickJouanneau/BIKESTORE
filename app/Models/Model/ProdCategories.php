<?php

namespace App\Models\Model;

use JsonSerializable;

class ProdCategories implements JsonSerializable
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


    public function jsonSerialize()
    {
        return [
            "id" => $this->categoryId,
            "name" => $this->categoryName
        ];
    }
}
