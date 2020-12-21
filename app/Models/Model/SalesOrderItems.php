<?php

namespace App\Models\Model;
use App\Models\Model\ProdProducts;

class SalesOrderItems extends SalesOrders
{
    private $orderId;
    private $itemId;
    private $quantity;
    private $listPrice;
    private $discount;

    private ProdProducts $prodProduct;


    public function getOrderId()
    {
        return $this->orderId;
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


    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
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
}
