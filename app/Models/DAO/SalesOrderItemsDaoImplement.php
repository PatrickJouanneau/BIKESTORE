<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\SalesOrderItems;
use App\Models\DAO\ProdProductsDaoInterface;

class SalesOrderItemsDaoImplement implements SalesOrderItemsDaoInterface
{
    private $productDao;
    public function __construct(ProdProductsDaoInterface $productDao)
    {
        $this->productDao = $productDao;
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
            $orderItem->setDiscount($row['discount']);

            $product = $this->productDao->getProductById($row['product_id']);
            $orderItem->setProductDao($product);

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
            $orderItem->setDiscount($resultBdd['discount']);

            $product = $this->productDao->getProductById($resultBdd['product_id']);
            $orderItem->setProductDao($product);

            return $orderItem;
    }
}
