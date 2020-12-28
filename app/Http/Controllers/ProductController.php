<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Model\ProdProducts;


class ProductController extends Controller
{
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
        $product->prodProductBrand->setBrandName($prod);
        $product->prodProductCategory->setCategoryname($prod);
        $product->setModelYear($prod);
        $product->setListPrice($prod);


        $productsManager->createProduct($product);
        return redirect('/success');
    }
}
