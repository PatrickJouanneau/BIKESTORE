<?php

namespace App\Http\Controllers;

use App\Models\Manager\ProdCategoriesManagerInterface;
use App\Models\Manager\ProdCategoriesManagerImplement;
use App\Models\Model\prodCategories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(prodCategoriesManagerInterface $categoriesManager)
    {
        $categories = $categoriesManager->getAllCategories();
        return view('ListeCategories')->with(['categories' => $categories]);
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
     * @param  \App\Models\prodCategories  $prodCategories
     * @return \Illuminate\Http\Response
     */
    public function show(prodCategoriesManagerInterface $categoriesManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prodCategories  $prodCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(prodCategoriesManagerInterface $categoriesManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prodCategories  $prodCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prodCategoriesManagerInterface $categoriesManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prodCategories  $prodCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(prodCategoriesManagerInterface $categoriesManager)
    {
        //
    }
}
