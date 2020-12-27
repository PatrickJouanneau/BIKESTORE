<?php

namespace App\Models\Manager;

use App\Exceptions\CategoryException;
use App\Models\DAO\ProdCategoriesDaoInterface;
use App\Models\Manager\ProdCategoriesManagerInterface;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Model\ProdCategories;


class ProdCategoriesManagerImplement implements ProdCategoriesManagerInterface
{
    private $categoriesDao;
    private $ProdProductsManagerInterface;
    public function __construct(
        ProdCategoriesDaoInterface $categoriesDao,
        ProdProductsManagerInterface $ProdProductsManagerInterface
    ) {
        $this->categoriesDao = $categoriesDao;
        $this->ProdProductsManagerInterface = $ProdProductsManagerInterface;
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


    public function deleteCategoryById($categoryId)
    {
        if ($this->ProdProductsManagerInterface->countProdProductsWithCategoryId($categoryId) == 0) {
            $this->categoriesDao->deleteCategoryById($categoryId);
        } else {
            throw new CategoryException("Des produits sont liés à cette catégorie.");
        }
    }
}
