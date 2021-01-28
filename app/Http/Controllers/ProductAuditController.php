<?php

namespace App\Http\Controllers;

use App\Models\Manager\ProdProductAuditManagerInterface;


class ProductAuditController extends Controller
{
    public function index()
    {
    }

    public function allJsonAuditProd(ProdProductAuditManagerInterface $productAuditManager)
    {
        $allProduct = $productAuditManager->getAllProductAudits();
        return response()->json($allProduct);
        //return view('/Audits/ProductAudits')->with(['productAudits' => $allProduct]);
    }
}
