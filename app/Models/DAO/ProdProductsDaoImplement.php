<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\ProdProducts;
use App\Models\DAO\ProdProductsDaoInterface;



class ProdProductsDaoImplement implements ProdProductsDaoInterface
{
    public function getAllProducts()
    {
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.products");
        $resultBdd = $reponse->fetchAll();

        $allProducts = [];
        foreach ($resultBdd as $i => $row) {
            $product = new ProdProducts($row
            ['product_id'],
            ['product_name'],
            ['brand_id'],
            ['category_id'],
            ['model_year'],
            ['liste_price']
        );

        $product->setProductId($row['product_id']);
        $product->setProductName($row['product_name']);
        $product->setBrandId($row['brand_id']);
        $product->setCategoryId($row['category_id']);
        $product->setModelYear($row['model_year']);
        $product->setListPrice($row['list_price']);
        array_push($allProducts, $product);
        }
        return $allProducts;
    }
}
