<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Model\ProdProducts;
use App\Models\Manager\ProdBrandsManagerInterface;
use App\Models\Manager\ProdCategoriesManagerInterface;
use App\Models\Model\ProdBrands;
use App\Models\Model\ProdCategories;

class ProductController extends Controller
{
    public function formCreateProd()
    {
        return view('/Products.ProductForm');
    }


    public function createProd(ProductRequest $request, ProdProductsManagerInterface $productsManager, ProdBrandsManagerInterface $brandManager, ProdCategoriesManagerInterface $categoryManager)
    {
        $name = $request->input('product-name');
        $brandId = $request->input('product-select-brand');
        $categoryId = $request->input('product-select-category');
        $year = $request->input('product-select-year');
        $price = $request->input('product-price');

        $product = new ProdProducts();
        $product->setProductName($name);
        $product->setProductBrand($brandManager->getBrandById($brandId));
        $product->setProductCategory($categoryManager->getCategoryById($categoryId));
        $product->setModelYear($year);
        $product->setListPrice($price);

        $productsManager->createProduct($product);
        return redirect('/success');
    }


    public function formUpdateProd(ProdProductsManagerInterface $productsManager, $productId)
    {
        $product = $productsManager->getProductById($productId);
        return view('Products.ProductFormUpdate')->with(["product" => $product]);
    }


    public function updateProd(ProductRequest $request, ProdProductsManagerInterface $productsManager, ProdBrandsManagerInterface $brandManager, ProdCategoriesManagerInterface $categoryManager, $productId)
    {
        $prod = new ProdProducts();
        $prod->setProductId($productId);
        $prod->setProductName($request->input("product-name"));
        $prod->setProductBrand($brandManager->getBrandById($request->input("product-select-brand")));
        $prod->setProductCategory($categoryManager->getCategoryById($request->input("product-select-category")));
        $prod->setModelYear($request->input("product-select-year"));
        $prod->setListPrice($request->input("product-price"));

        $productsManager->updateProduct($prod);
        return redirect('/success/');

    }



}
