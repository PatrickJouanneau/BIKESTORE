<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\SalesOrderItems;
use App\Models\DAO\SalesStoresDaoInterface;
use App\Models\DAO\SalesStaffsDaoInterface;
use App\Models\DAO\ProdProductsDaoInterface;
use App\Models\Model\ProdProducts;
use Exception;
use Illuminate\Support\Facades\Log;

class SalesOrderItemsDaoImplement implements SalesOrderItemsDaoInterface
{
    private $prodProduct;
    private $salesOrders;
    private $salesStores;
    private $salesStaff;
    public function __construct(ProdProductsDaoInterface $prodProduct, SalesOrdersDaoInterface $salesOrders, SalesStoresDaoInterface $salesStores, SalesStaffsDaoInterface $salesStaffs)
    {
        $this->prodProduct = $prodProduct;
        $this->salesOrders = $salesOrders;
        $this->salesStores = $salesStores;
        $this->salesStaffs = $salesStaffs;
    }


    public function getListeOrderItems()
    {
        $resultBdd = DB::select("exec dbo.get_liste_order_items");

        $listeOrderItems = [];
        foreach ($resultBdd as $i => $row) {
            $orderItem = new SalesOrderItems();
            //$orderItem->setOrderId($row->order_id);
            $order = $this->salesOrders->getOrderById($row->order_id);
            $orderItem->setOrder($order);
            $orderItem->setItemId($row->item_id);
            $orderItem->setQuantity($row->quantity);
            $orderItem->setListPrice($row->list_price);
            $orderItem->setDiscount($row->discount);

            $product = $this->prodProduct->getProductById($row->product_id);
            $orderItem->setProdProduct($product);


            array_push($listeOrderItems, $orderItem);
        }
        return $listeOrderItems;
    }



    public function getAllOrderItems()
    {
        try {
            $resultBdd = DB::select("exec dbo.get_all_order_items");

            $allOrderItems = [];
            foreach ($resultBdd as $i => $row) {
                $orderItem = new SalesOrderItems();
                $order = $this->salesOrders->getOrderById($row->order_id);
                $orderItem->setOrder($order);
                //$orderItem->setOrderId($row->order_id);
                $orderItem->setItemId($row->item_id);
                $orderItem->setQuantity($row->quantity);
                $orderItem->setListPrice($row->list_price);
                $orderItem->setDiscount($row->discount);

                $product = $this->prodProduct->getProductById($row->product_id);
                $orderItem->setProdProduct($product);


                array_push($allOrderItems, $orderItem);
            }
            return $allOrderItems;
        } catch (Exception $e) {
            Log::error('$e');
        }
    }



    public function getOrderItem($itemId)
    {
        try {
            $bdd = DB::getpdo();
            $reponse = $bdd->query("SELECT * FROM sales.order_items WHERE item_id='" . $itemId . "' ");
            $resultBdd = $reponse->fetch();

            $orderItem = new SalesOrderItems();

            $order = $this->salesOrders->getOrderById($resultBdd['order_id']);
            $order->setOrder($order);

            //$orderItem->setOrderId($resultBdd['order_id']);
            $orderItem->setItemId($resultBdd['item_id']);
            $orderItem->setQuantity($resultBdd['quantity']);
            $orderItem->setListPrice($resultBdd['list_price']);
            $orderItem->setDiscount($resultBdd['discount']);

            $product = $this->prodProduct->getProductById($resultBdd['product_id']);
            $orderItem->setProdProduct($product);

            return $orderItem;
        } catch (Exception $e) {
            Log::error('$e');
        }
    }

    public function countSalesOrderItemsWithProductId($productId)
    {
        try {
            return DB::select("SELECT count(*) AS count FROM sales.order_items WHERE product_id = " . $productId)[0]->count;
        } catch (Exception $e) {
            Log::error('$e');
        }
    }


    public function getOrdersStoreMonth()
    {
        //try {
        return DB::select("exec dbo.get_orders_store_month");

        //return $resultBdd;
        //$allOrderStore = [];
        /*foreach ($resultBdd as $i => $row) {
            $order = new SalesOrderItems();


            $order->setItemId($row->item_id);
            $order->setQuantity($row->quantity);
            $order->setListPrice($row->list_price);
            $order->setDiscount($row->discount);

            $order = $this->salesOrders->getOrderById($row->order_id);
            $order->setOrder($order);

            //$store = $this->salesStores->getStoreById($row->store_id);
            //$order->setSalesStores($store);

            array_push($allOrderStore, $order);
       // }
        return $allOrderStore;
        //} catch (Exception $e) {
        //  error_log($e);
        //Log::error('$e');
        //}
        */
    }
}
