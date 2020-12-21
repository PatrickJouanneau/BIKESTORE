<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\SalesOrderItems;
use App\Models\DAO\ProdProductsDaoInterface;

class SalesOrderItemsDaoImplement implements SalesOrderItemsDaoInterface
{
    private $prodProduct;
    public function __construct(ProdProductsDaoInterface $prodProduct)
    {
        $this->prodProduct = $prodProduct;
    }

    public function getAllOrderItems()
    {
        $bdd = DB::getpdo();
        $reponse = $bdd->query("SELECT * FROM sales.order_items");
        $resultBdd = $reponse->fetchall();

        $allOrderItems = [];
        foreach ($resultBdd as $i => $row) {
            $orderItem = new SalesOrderItems();
            $orderItem->setOrderId($row['order_id']);
            $orderItem->setItemId($row['item_id']);
            $orderItem->setQuantity($row['quantity']);
            $orderItem->setListPrice($row['list_price']);
            $orderItem->setDiscount($row['discount']);

            $product = $this->prodProduct->getProductById($row['product_id']);
            $orderItem->setprodProduct($product);


            array_push($allOrderItems, $orderItem);
        }
        return $allOrderItems;
    }

    public function getOrderItem($itemId)
    {
        $bdd = DB::getpdo();
        $reponse = $bdd->query("SELECT * FROM sales.order_items WHERE item_id='" . $itemId . "' ");
        $resultBdd = $reponse->fetch();

        $orderItem = new SalesOrderItems();
            $orderItem->setOrderId($resultBdd['order_id']);
            $orderItem->setItemId($resultBdd['item_id']);
            $orderItem->setQuantity($resultBdd['quantity']);
            $orderItem->setListPrice($resultBdd['list_price']);
            $orderItem->setDiscount($resultBdd['discount']);

            $product = $this->produprodProductctDao->getProductById($resultBdd['product_id']);
            $orderItem->setprodProduct($product);

            return $orderItem;
    }
}
