<?php

namespace App\Http\Controllers;

use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Manager\ProdProductsManagerImplement;
use App\Models\Model\ProdProducts;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProdProductsManagerInterface $productsManager)
    {
        $products = $productsManager->getAllProducts();
        return view('ListeProducts')->with(
            ['products' => $products],
            ['brands' => $brands],
            ['categories' => $categories]

        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Model\ProdProducts  $prodProducts
     * @return \Illuminate\Http\Response
     */
    public function show(ProdProducts $prodProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Model\ProdProducts  $prodProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdProducts $prodProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Model\ProdProducts  $prodProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdProducts $prodProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Model\ProdProducts  $prodProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdProducts $prodProducts)
    {
        //
    }
}
