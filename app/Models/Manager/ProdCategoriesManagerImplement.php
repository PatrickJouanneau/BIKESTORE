<?php

namespace App\Models\Manager;

use App\Models\DAO\ProdCategoriesDaoImplement;

class ProdCategoriesManagerImplement implements ProdCategoriesManagerInterface
{
    private $categoriesDao;
    public function __construct(ProdCategoriesDaoImplement $categoriesDao)
    {
        $this->categoriesDao = $categoriesDao;
    }

    public function getAllCategories()
    {
        return $this->categoriesDao->getAllCategories();
    }
}
