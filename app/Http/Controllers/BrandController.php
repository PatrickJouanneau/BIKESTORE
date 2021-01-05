<?php

namespace App\Http\Controllers;

use App\Exceptions\CategoryException;
use App\Http\Requests\BrandRequest;
use App\Models\Manager\ProdBrandsManagerInterface;
use App\Models\Model\ProdBrands;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function formCreateBrd()
    {
        return view('Brands.BrandForm');
    }



    public function createBrd(BrandRequest $request, ProdBrandsManagerInterface $BrandsManager)
    {
        $brd = $request->input('brand');

        $brand = new ProdBrands();
        $brand->setBrandName($brd);

        $BrandsManager->createBrand($brand);
        return redirect('/success/');
    }



    
    public function formUpdateBrd(ProdBrandsManagerInterface $brandsManager, $id)
    {
        $brand = $brandsManager->getBrandById($id);
        return view('Brands.BrandFormUpdate')->with(["brand" => $brand]);
    }



    public function updateBrd(BrandRequest $request, ProdBrandsManagerInterface $brandsManager, $id)
    {
        $brd = new ProdBrands();
        $brd->setBrandId($id);
        $brd->setBrandName($request->input("brand"));

        $brandsManager->updateBrand($brd);
        return redirect('/success/');
    }



    public function deleteBrd(ProdBrandsManagerInterface $brandsManager, $id)
    {
        try {
            $brandsManager->deleteBrandById($id);
            return redirect('/success/');
        } catch (CategoryException $e) {
            return view('error') . with(['message' => $e->getMessage()]);
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
