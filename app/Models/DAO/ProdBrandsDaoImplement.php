<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\DAO\ProdBrandsDaoInterface;
use App\Models\Model\ProdBrands;
use Exception;
use Illuminate\Support\Facades\Log;


class ProdBrandsDaoImplement implements ProdBrandsDaoInterface
{
    public function getAllBrands()
    {
        try {
            $bdd = DB::getPdo();
            $reponse = $bdd->query("SELECT * FROM production.brands ORDER BY brand_name");
            $resultBdd = $reponse->fetchAll();

            $allBrands = [];  // je crée une variable $allBrands de type tableau

            // Ensuite je parcours les résultats de la requête stockée dans $resultBdd
            foreach ($resultBdd as $i => $row) {
                // A chaque exécution de la boucle, je crée une variable $brand,
                // et on instancie un objet ProdBrands que l'on place dans la variable $brand
                $brand = new ProdBrands();
                // $brand contientl'instance de de l'objet ProdBrand (La variable $brand est de type ProdBrands)

                // Ensuite on rempli les valeurs de $brand (qui est de type ProdBrand) grace aux valeurs retournées par la requêtes sql.
                $brand->setBrandId($row['brand_id']);
                $brand->setBrandName($row['brand_name']);
                // On insère la variable $brand (qui est de type ProdBrands) dans le tableau $allbrands définit avant la boucle foreach.
                array_push($allBrands, $brand);
            }
            return $allBrands;
        } catch (Exception $e) {
            Log::error($e);
        }
    }


    public function getBrandById($brandId)
    {
        try {
            $bdd = DB::getPdo();
            $reponse = $bdd->query("SELECT * FROM production.brands WHERE brand_id='" . $brandId . "'");
            $resultBdd = $reponse->fetch();

            $brand = new ProdBrands();
            $brand->setBrandId($resultBdd['brand_id']);
            $brand->setBrandName($resultBdd['brand_name']);

            return $brand;
        } catch (Exception $e) {
            Log::error($e);
        }
    }



    public function createBrand(ProdBrands $brands)
    {
        try {
            $resultBdd = DB::insert("INSERT INTO production.brands (brand_name) VALUES (?)", [$brands->getBrandName()]);
        } catch (Exception $e) {
            Log::error($e);
        }
    }

    public function updateBrand(prodBrands $brands)
    {
        try {
            $resultBdd = DB::update("UPDATE production.brands SET brand_name = ? WHERE brand_id = ? ", [$brands->getBrandName(), $brands->getBrandId()]);
        } catch (Exception $e) {
            Log::error($e);
        }
    }


    public function deleteBrandById($brandId)
    {
        try {
            $resultBdd = DB::delete("DELETE FROM production.brands WHERE brand_id = ? ", [$brandId]);
        } catch (Exception $e) {
            Log::error($e);
        }
    }
}
