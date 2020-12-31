<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\DAO\ProdProductsDaoInterface;
use App\Models\DAO\ProdBrandsDaoInterface;
use App\Models\DAO\ProdCategoriesDaoInterface;
use App\Models\Model\ProdProducts;
use App\Models\Model\ProdBrands;
use App\Models\Model\ProdCategories;


class ProdProductsDaoImplement implements ProdProductsDaoInterface
{
    private $categoryDao;
    private $brandDao;

    public function __construct(
        ProdCategoriesDaoInterface $categoryDao,
        ProdBrandsDaoInterface $brandDao
    ) {
        $this->categoryDao  = $categoryDao;
        $this->brandDao  = $brandDao;
    }


    public function getAllProducts()
    {
        //$bdd = DB::getPdo();
        //$resultBdd = DB::select("SELECT TOP 10 * FROM production.products ORDER BY product_id DESC");
        //$resultBdd = $reponse->fetchAll();

        $resultBdd = DB::select('exec dbo.get_liste_products');

        $allProducts = [];
        foreach ($resultBdd as $i => $row) {
            $product = new ProdProducts();
            $product->setProductId($row->product_id);
            $product->setProductName($row->product_name);
            $product->setModelYear($row->model_year);
            $product->setListPrice($row->list_price);

            $category = $this->categoryDao->getCategoryById($row->category_id);
            $product->setProductCategory($category);

            $brand = $this->brandDao->getBrandById($row->brand_id);
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

    public function countProdProductsWithCategoryId($categoryId)
    {
        return DB::select("SELECT count(*) AS count FROM production.products WHERE category_id = " . $categoryId)[0]->count;
    }


    public function countProdProductsWithBrandId($brandId)
    {
        return DB::select("SELECT count(*) AS count FROM production.products WHERE brand_id = " . $brandId)[0]->count;
    }


    public function createProduct($products)
    {
        $resultBdd = DB::insert("INSERT INTO production.products (product_name, brand_id, category_id, model_year, list_price) VALUES (?, ?, ?, ?, ?)", [
            $products->getProductName(),
            $products->getProductBrand()->getBrandId(),
            $products->getProductCategory()->getCategoryId(),
            $products->getModelYear(),
            $products->getListPrice()
        ]);
    }



    public function updateProduct($products)
    {
        $resultBdd = DB::update("UPDATE production.products SET
            product_name = ?,
            brand_id = ?,
            category_id = ?,
            model_year = ?,
            liste_price = ?
        WHERE product_id = ?
        ", [
            $products->getProductName(),
            $products->getProductBrand()->getBrandId(),
            $products->getProductCategory()->getCategoryId(),
            $products->getModelYear(),
            $products->getListPrice(),
            $products->getProductId(),
        ]);
    }


    public function deleteProductById($productId)
    {
        $resultBdd = DB::delete("DELETE FROM production.products WHERE product_id = ? ", [$productId]);
    }




    public function searchProduct($product)
    {
        $resultBdd = DB::select("SELECT product_name FROM production.product");
    }
}
