<?php

namespace App\Http\Controllers;


use App\Exceptions\CategoryException;
use App\Http\Requests\BrandRequest;
use App\Models\Manager\ProdBrandsManagerInterface;
use App\Models\Model\ProdBrands;


class BrandsController extends Controller
{
    public function formCreateBrand()
    {
        return view('Brands/BrandForm');
    }


    public function createBrand(BrandRequest $request, ProdBrandsManagerInterface $BrandsManager)
    {
        $brd = $request->input('brand');

        $brand = new ProdBrands();
        $brand->setBrandName($brd);

        $BrandsManager->createBrand($brand);
        return redirect('/success/');
        //return view('/Success').with(["tabActive"=>"brand"]);
        //return view('/Success');
    }

    public function formUpdateBrand(ProdBrandsManagerInterface $brandsManager, $brandId)
    {
        $brand = $brandsManager->getbrandById($brandId);
        return view('Brands/BrandFormUpdate')->with(["brand" => $brand]);
    }


    public function updateBrand(BrandRequest $request, ProdBrandsManagerInterface $brandsManager, $brandId)
    {
        $brd = new ProdBrands();
        $brd->setBrandId($brandId);
        $brd->setBrandName($request->input("brandUp"));

        $brandsManager->updateBrand($brd);

        //return redirect('/brands/' . $brd->getBrandId() . '/edit/');
        return redirect('/success');
    }


    public function deleteBrand(ProdBrandsManagerInterface $brandsManager, $brandId)
    {
        try{
            $brandsManager->deleteBrandById($brandId);
            return view('/Success');
        }catch(CategoryException $e){
            return view('error').with(['message'=>$e->getMessage()]);
        }
        //return redirect('/success');
    }






    public function getAllBrandsJson(ProdBrandsManagerInterface $brandManager){
        $brands = $brandManager->getAllBrands();


        $xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
        $xml .= "<brands>\n";
        foreach ($brands as $data) {
            $xml .= $this->create_item($data->getBrandId(), $data->getBrandName());
        }
        $xml .= "</brands>\n";
        #echo $xml;

        return response($xml,200)->header("Content-type","text/xml");

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
