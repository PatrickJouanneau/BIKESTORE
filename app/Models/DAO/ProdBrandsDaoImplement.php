<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\ProdBrands;
use App\Models\DAO\ProdBrandsDaoInterface;


class ProdBrandsDaoImplement implements ProdBrandsDaoInterface
{
/*
    public function createBrand($brand)
    {
        $bdd = DB::getPdo();
        $create = $bdd->prepare('INSERT INTO production.brands (brands_id, brand_name) VALUES (?, ?)');

        $create->execute(array(
            $brand->getBrandName()
        ));

    }
*/
    public function getAllBrands()
    {
        //$results = DB::select('SELECT * FROM production.brands');
        //return $results;

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
    }

    public function getBrandById($brandId)
    {
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.brands WHERE brand_id='" . $brandId . "'");
        $resultbdd = $reponse->fetch();

        $brand = new ProdBrands();
        $brand->setBrandId($resultbdd['brand_id']);
        $brand->setBrandName($resultbdd['brand_name']);

        return $brand;
    }

    public function updateBrand($brandId)
    {
        $bdd = DB::postPdo();
        $modify = $bdd->prepare("UPDATE production.brands SET brand_name = ? WHERE brand_id = ? ")[$brandId];
        $modify->execute(array(
            $brandId->getBrandName()
        ));
    }


}
