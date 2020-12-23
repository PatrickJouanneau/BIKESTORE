<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Manager\ProdBrandsManagerInterface;
use App\Models\Model\ProdBrands;


class BrandsController extends Controller
{
    public function createBrand(BrandRequest $request, ProdBrandsManagerInterface $BrandsManager)
    {
        $brd = $request->input('brand');

        $brand = new ProdBrands();
        $brand->setBrandName($brd);

        $BrandsManager->createBrand($brand);
        //return redirect('/success');
        return view('/Success');
    }

    public function formUpdateBrand(ProdBrandsManagerInterface $brandsManager, $brandId)
    {
        $brand = $brandsManager->getbrandById($brandId);
        return view('Brands/BrandsFormUpdate')->with(["brand" => $brand]);
    }


    public function updateBrand(BrandRequest $request, ProdBrandsManagerInterface $brandsManager, $brandId)
    {
        $brd = new ProdBrands();
        $brd->setBrandId($brandId);
        $brd->setBrandName($request->input("brandUp"));

        $brandsManager->updateBrand($brd);

        return redirect('/brands/' . $brd->getBrandId() . '/edit/');
    }


    public function deleteBrand(ProdBrandsManagerInterface $brandsManager, $brandId)
    {
        $brandsManager->deleteBrandById($brandId);
        //return redirect('/success');
        return view('/Success');
    }

}
