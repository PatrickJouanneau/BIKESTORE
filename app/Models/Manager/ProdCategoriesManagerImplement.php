<?php

namespace App\Models\Manager;

use App\Exceptions\CategoryException;
use App\Models\DAO\ProdCategoriesDaoInterface;
use App\Models\DAO\ProdProductsDaoInterface;
use App\Models\Manager\ProdCategoriesManagerInterface;
use App\Models\Model\ProdCategories;

class ProdCategoriesManagerImplement implements ProdCategoriesManagerInterface
{
    private $categoriesDao;
    private $productManagerInterface;
    public function __construct(
        ProdCategoriesDaoInterface $categoriesDao,
        ProdProductsDaoInterface $productManagerInterface
    ) {
        $this->categoriesDao = $categoriesDao;
        $this->productManagerInterface = $productManagerInterface;
    }


    public function getAllCategories()
    {
        return $this->categoriesDao->getAllCategories();
    }


    public function getCategoryById($categoryId)
    {
        return $this->categoriesDao->getCategoryById($categoryId);
    }


    public function createCategory(ProdCategories $prodCategories)
    {
        $this->categoriesDao->createCategory($prodCategories);
    }


    public function updateCategory(ProdCategories $prodCategories)
    {
        $this->categoriesDao->updateCategory($prodCategories);
    }


    public function deleteCategoryById(Prodcategories $categoryId)
    {
        if ($this->ProductManagerInterface->countProductionWithCategoryId($categoryId) == 0) {
            $this->categoriesDao->deleteCategoryById($categoryId);
        } else {
            return view('failure');
            //throw new CategoryException();
        }
    }
}
