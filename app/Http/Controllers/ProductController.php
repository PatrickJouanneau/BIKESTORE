<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Model\ProdProducts;
use App\Models\DAO\ProdBrandsDaoInterface;
use App\Models\DAO\ProdCategoriesDaoInterface;


class ProductController extends Controller
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

    public function formCreateProd()
    {
        return view('/Products.ProductForm');
    }


    public function createProd(ProductRequest $request, ProdProductsManagerInterface $productsManager)
    {
        $prod = $request->input('product-name');
        $prod = $request->input('product-select-brand');
        $prod = $request->input('product-select-category');
        $prod = $request->input('product-select-year');
        $prod = $request->input('product-price');


        $product = new ProdProducts();
        $product->setProductName($prod);
        $product->brandDao->setBrandName($prod);
        $product->categoryDao->setCategoryName($prod);
        $product->setModelYear($prod);
        $product->setListPrice($prod);


        $productsManager->createProduct($product);
        return redirect('/success');
    }
}
