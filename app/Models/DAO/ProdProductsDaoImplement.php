<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\DAO\ProdProductsDaoInterface;
use App\Models\DAO\ProdBrandsDaoInterface;
use App\Models\DAO\ProdCategoriesDaoInterface;
use App\Models\Model\ProdProducts;
use Exception;
use Illuminate\Support\Facades\Log;


class ProdProductsDaoImplement implements ProdProductsDaoInterface
{
    private $categoryDao;
    private $brandDao;

    public function __construct(
        ProdCategoriesDaoInterface $categoryDao,
        ProdBrandsDaoInterface $brandDao
    ) {
        $this->categoryDao  = $categoryDao;
        $this->brandDao  = $brandDao;
    }


    public function getListProducts()
    {
        //$bdd = DB::getPdo();
        //$resultBdd = DB::select("SELECT TOP 10 * FROM production.products ORDER BY product_id DESC");
        //$resultBdd = $reponse->fetchAll();

        $resultBdd = DB::select('exec dbo.get_liste_products');

        $listProducts = [];
        foreach ($resultBdd as $i => $row) {
            $product = new ProdProducts();
            $product->setProductId($row->product_id);
            $product->setProductName($row->product_name);
            $product->setModelYear($row->model_year);
            $product->setListPrice($row->list_price);

            $category = $this->categoryDao->getCategoryById($row->category_id);
            $product->setProductCategory($category);

            $brand = $this->brandDao->getBrandById($row->brand_id);
            $product->setProductBrand($brand);

            array_push($listProducts, $product);
        }
        return $listProducts;
    }



    public function getAllProducts()
    {
        $resultBdd = DB::select('exec dbo.get_all_products');

        $allProducts = [];
        foreach ($resultBdd as $i => $row) {
            $product = new ProdProducts();
            $product->setProductId($row->product_id);
            $product->setProductName($row->product_name);
            $product->setModelYear($row->model_year);
            $product->setListPrice($row->list_price);

            $category = $this->categoryDao->getCategoryById($row->category_id);
            $product->setProductCategory($category);

            $brand = $this->brandDao->getBrandById($row->brand_id);
            $product->setProductBrand($brand);

            array_push($allProducts, $product);
        }
        return $allProducts;
    }



    public function getProductById($productId)
    {
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.products WHERE product_id ='" . $productId . "'");
        $resultBdd = $reponse->fetch();

        try {
            $product = new ProdProducts();
            $product->setProductId($resultBdd['product_id']);
            $product->setProductName($resultBdd['product_name']);
            $product->setModelYear($resultBdd['model_year']);
            $product->setListPrice($resultBdd['list_price']);

            $category = $this->categoryDao->getCategoryById($resultBdd['category_id']);
            $brand = $this->brandDao->getBrandById($resultBdd['brand_id']);

            $product->setProductCategory($category);
            $product->setProductBrand($brand);

            return $product;
        } catch (Exception $e) {
            Log::error('$e');
        }
    }



    public function countProdProductsWithCategoryId($categoryId)
    {
        return DB::select("SELECT count(*) AS count FROM production.products WHERE category_id = " . $categoryId)[0]->count;
    }


    public function countProdProductsWithBrandId($brandId)
    {
        return DB::select("SELECT count(*) AS count FROM production.products WHERE brand_id = " . $brandId)[0]->count;
    }




    public function createProduct(ProdProducts $products)
    {
        $resultBdd = DB::insert(
            "INSERT INTO production.products (product_name, brand_id, category_id, model_year, list_price) VALUES (?, ?, ?, ?, ?)",
            [
                $products->getProductName(),
                $products->getProductBrand()->getBrandId(),
                $products->getProductCategory()->getCategoryId(),
                $products->getModelYear(),
                $products->getListPrice()
            ]
        );
    }



    public function updateProduct($products)
    {
        $resultBdd = DB::update("UPDATE production.products SET
            product_name = ?,
            brand_id = ?,
            category_id = ?,
            model_year = ?,
            liste_price = ?
        WHERE product_id = ?
        ", [
            $products->getProductName(),
            $products->getProductBrand()->getBrandId(),
            $products->getProductCategory()->getCategoryId(),
            $products->getModelYear(),
            $products->getListPrice(),
            $products->getProductId()
        ]);
    }


    public function deleteProductById($productId)
    {
        $resultBdd = DB::delete("DELETE FROM production.products WHERE product_id = ? ", [$productId]);
    }



    

    public function searchProduct($products)
    {
        if (!empty($_POST["keyword"])) {
            $resultBdd = DB::select("SELECT product_id, product_name FROM production.products WHERE product_name like '" . $_POST["keyword"] . "%' ORDER BY product_name LIMIT 0,6");
            $product = new ProdProducts();
            $product->setProductId($resultBdd['product_id']);
            $product->setProductName($resultBdd['product_name']);

            if (!empty($product)) {
?> <ul id="product-list">
                    <?php
                    foreach ($product as $designation) {
                    ?>
                        <li onClick="selectProduct('<?php echo $designation["product_name"]; ?>');"><?php echo $designation["product_name"]; ?>
                        </li>
                    <?php } ?>
                </ul>
<?php
            }
        }
    }
}
