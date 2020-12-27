<?php

namespace App\Http\Controllers;


use App\Exceptions\CategoryException;
use App\Http\Requests\BrandRequest;
use App\Models\Manager\ProdBrandsManagerInterface;
use App\Models\Model\ProdBrands;


class BrandsController extends Controller
{
    public function formCreateBrd()
    {
        return view('Brands.BrandForm');
    }


    public function createBrd(BrandRequest $request, ProdBrandsManagerInterface $brandsManager)
    {
        $brd = $request->input('brand');

        $brand = new ProdBrands();
        $brand->setBrandName($brd);

        $brandsManager->createBrand($brand);
        //return redirect('/success/');
        //return view('/Success').with(["tabActive"=>"brand"]);
        //return view('/Success');
        dd($brand);

    }

    public function formUpdateBrd(ProdBrandsManagerInterface $brandsManager, $brandId)
    {
        $brand = $brandsManager->getBrandById($brandId);
        return view('Brands.BrandFormUpdate')->with(["brand" => $brand]);
    }


    public function updateBrd(BrandRequest $request, ProdBrandsManagerInterface $brandsManager, $brandId)
    {
        $brd = new ProdBrands();
        $brd->setBrandId($brandId);
        $brd->setBrandName($request->input("brand"));

        $brandsManager->updateBrand($brd);

        //return redirect('/brands/' . $brd->getBrandId() . '/edit/');
        return redirect('/success/');
    }


    public function deleteBrd(ProdBrandsManagerInterface $brandsManager, $brandId)
    {
        try {
            $brandsManager->deleteBrandById($brandId);
            return redirect('/success');
        } catch(CategoryException $e) {
            return view('error').with(['message'=>$e->getMessage()]);
        }
    }






    public function getAllBrandsJson(ProdBrandsManagerInterface $brandManager)
    {
        $brands = $brandManager->getAllBrands();


        $xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
        $xml .= "<brands>\n";
        foreach ($brands as $data) {
            $xml .= $this->create_item($data->getBrandId(), $data->getBrandName());
        }
        $xml .= "</brands>\n";
        #echo $xml;

        return response($xml, 200)->header("Content-type", "text/xml");

        //return response()->json($brands);
    }

    private function create_item($id, $name)
    {
        $item = "<brand>\n";
        $item .= "<id >" . $id . "</id>\n";
        $item .= "<name>" . $name . "</name>\n";
        $item .= "</brand>\n";
        return $item;
    }
}
