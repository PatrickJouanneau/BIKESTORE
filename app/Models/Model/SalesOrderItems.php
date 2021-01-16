<?php

namespace App\Models\Model;

use App\Models\Model\ProdProducts;
use JsonSerializable;
use Ramsey\Uuid\Type\Integer;

class SalesOrderItems implements JsonSerializable
{
    //private $orderId;
    private $order;
    private $itemId;
    private $quantity;
    private $listPrice;
    private $discount;

    private ProdProducts $prodProduct;
    //private SalesOrders $salesOrder;


    public function getOrder()
    {
        return $this->order;
    }
    public function getItemId()
    {
        return $this->itemId;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function getListPrice()
    {
        return $this->listPrice;
    }
    public function getDiscount()
    {
        return $this->discount;
    }
    public function getProdProduct(): ProdProducts
    {
        return $this->prodProduct;
    }


    public function setOrder($order)
    {
        $this->order = $order;
    }
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    public function setProdProduct(ProdProducts $prodProduct)
    {
        $this->prodProduct = $prodProduct;
    }

    public function jsonSerialize()
    {

        $arr = [];

        if ($this->order != null) {
            $arr["order"] = $this->order;
        }
        if ($this->itemId != null) {
            $arr["item"] = $this->itemId;
        }
        if (isset($this->prodProduct)) {
            $arr["prod"] = $this->prodProduct;
        }
        if ($this->quantity != null) {
            $arr["qti"] = $this->quantity;
        }
        if ($this->listPrice != null) {
            $arr["price"] = $this->listPrice;
        }
        if ($this->discount != null)  {
            $arr["disc"] = $this->discount;
        }

        return $arr;

        /*
        return [
            "order" => $this->order,
            "item" => $this->itemId,
            "proId" => $this->prodProduct->getProductId(),
            "name" => $this->prodProduct->getProductName(),
            "qti" => $this->quantity,
            "price" => $this->listPrice,
            "disc" => $this->discount
        ];
        */
    }
}
