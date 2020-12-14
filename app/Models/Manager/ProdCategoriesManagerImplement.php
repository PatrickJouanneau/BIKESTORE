<?php

namespace App\Models\Manager;

use App\Models\DAO\ProdCategoriesDaoInterface;
use App\Models\Manager\ProdCategoriesManagerInterface;

class ProdCategoriesManagerImplement implements ProdCategoriesManagerInterface
{
    private $categoriesDao;
    public function __construct(ProdCategoriesDaoInterface $categoriesDao)
    {
        $this->categoriesDao = $categoriesDao;
    }

    public function getAllCategories()
    {
        return $this->categoriesDao->getAllCategories();
    }
}
