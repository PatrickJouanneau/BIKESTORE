<?php

namespace App\Models\DAO;

use App\Models\DAO\ProdBrandsDaoInterface;
use App\Models\Model\ProdBrands;
use Illuminate\Support\Facades\DB;

class ProdBrandsDaoImplement implements ProdBrandsDaoInterface
{

    public function saveBrand($productionBrands)
    {
        $results = DB::insert('INSERT INTO production.brands (brands_id, brans_name) VALUES (?, ?)', [1, 'Dayle']);
        return $results;
    }

    public function getAllBrands()
    {
        //$results = DB::select('SELECT * FROM production.brands');
        //return $results;

        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.brands");
        $resultBdd = $reponse->fetchAll();

        $allBrands = [];
        foreach ($resultBdd as $i => $row) {
            $brand = new ProdBrands();
            $brand->setBrandId($row['brand_id']);
            $brand->setBrandName($row['brand_name']);

            array_push($allBrands, $brand);
        }
        return $allBrands;
    }
}
