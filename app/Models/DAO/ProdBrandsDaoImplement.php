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
        //$allBrands = DB::select('SELECT * FROM production.brands');
        //return $results;

        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.brands");
        $resultBdd = $reponse->fetchAll();

        $allBrands = [];  // je crée une variable $allBrands de type tableau

        // Ensuite je parcours les résultats de la requête stockée dans $resultBdd
        foreach ($resultBdd as $i => $row) {
            // A chaque exécution de la boucle, je crée une variable $brand,
            // et on instancie un objet ProdBrands que l'on place dans la variable $brand
            $brand = new ProdBrands($row['brand_id'], $row['brand_name']);
            // $brand contientl'instance de de l'objet ProdBrand (La variable $brand est de type ProdBrands)

            // Ensuite on rempli les valeurs de $brand (qui est de type ProdBrand) grace aux valeurs retournées par la requêtes sql.
            $brand->setBrandId($row['brand_id']);
            $brand->setBrandName($row['brand_name']);
            // On insère la variable $brand (qui est de type ProdBrands) dans le tableau $allbrands définit avant la boucle foreach.
            array_push($allBrands, $brand);
        }
        return $allBrands;
    }
}
