<?php

namespace App\Models\Dao;

use App\Models\Model\ProdProductAudit;
use App\Models\Dao\ProdProductAuditDaoInterface;
use Illuminate\Support\Facades\DB;


class ProdProductAuditDaoImplement implements ProdProductAuditDaoInterface
{
    public function getAllProductAudits()
    {
        $resultBdd = DB::select('exec dbo.get_all_product_audits');

        $allProducts = [];
        foreach ($resultBdd as $i => $row) {
            $product = new ProdProductAudit();
            $product->setChangeId($row->change_id);
            $product->setProductId($row->product_id);
            $product->setProductName($row->product_name);
            $product->setModelYear($row->model_year);
            $product->setBrandId($row->brand_id);
            $product->setCategotyId($row->category_id);
            $product->setListPrice($row->list_price);
            $product->setUpdated($row->updated_at);
            $product->setOption($row->operation);

            array_push($allProducts, $product);
        }
        return $allProducts;

    }
}
