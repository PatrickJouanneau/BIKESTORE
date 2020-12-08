<?php

namespace App\Http\Controllers;

use App\Models\ProductionBrands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupérer tous les Brands
        // entre ICI
        // le code MVC
        // et là
        return view('listeBrands');

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
     * @param  \App\Models\ProductionBrands  $productionBrands
     * @return \Illuminate\Http\Response
     */
    public function show(ProductionBrands $productionBrands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductionBrands  $productionBrands
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductionBrands $productionBrands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductionBrands  $productionBrands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductionBrands $productionBrands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductionBrands  $productionBrands
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductionBrands $productionBrands)
    {
        //
    }
}
