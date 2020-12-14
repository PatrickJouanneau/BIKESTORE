<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\DAO\ProdBrandsDaoImplement;
use App\Models\Manager\ProdCategoriesDaoImplement;
use App\Models\DAO\ProdProductsDaoInterface;
use App\Models\Model\ProdProducts;

use App\Models\DAO\ProdBrandsDaoInterface;
use App\Models\DAO\ProdCategoriesDaoInterface;
use App\Models\Model\ProdBrands;

class ProdProductsDaoImplement implements ProdProductsDaoInterface
{

    private $categoryDao;
    private $brandDao;

    public function __construct(ProdCategoriesDaoInterface $categoryDao, ProdBrandsDaoInterface $brandDao)
    {
        $this->categoryDao  = $categoryDao;
        $this->brandDao  = $brandDao;
    }


    public function getAllProducts()
    {
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.products");
        $resultBdd = $reponse->fetchAll();

        $allProducts = [];
        foreach ($resultBdd as $i => $row) {
            $product = new ProdProducts();
            $product->setProductId($row['product_id']);
            $product->setProductName($row['product_name']);
            $product->setModelYear($row['model_year']);
            $product->setListPrice($row['list_price']);

            $category = $this->categoryDao->getCategoryById($row['category_id']);
            $brand = $this->brandDao->getBrandById($row['brand_id']);

            $product->setProductCategory($category);
            $product->setProductBrand($brand);

            array_push($allProducts, $product);
        }
        return $allProducts;
    }

    public function getProductById($productId)
    {
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.products WHERE product_id ='" . $productId . "'");
        $resultBdd = $reponse->fetch();

        $product = new ProdProducts();
        $product->setProductId($resultBdd['product_id']);
        $product->setProductName($resultBdd['product_name']);
        $product->setModelYear($resultBdd['model_year']);
        $product->setListPrice($resultBdd['list_price']);

        $category = $this->categoryDao->getCategoryById($resultBdd['category_id']);
        $brand = $this->brandDao->getBrandById($resultBdd['brand_id']);

        $product->setProductCategory($category);
        $product->setProductBrand($brand);

        return $product;
    }
}
