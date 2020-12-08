<?php

namespace App\Models\Model;


class SalesOrderItems
{
    private $orderId;
    private $quantity;
    private $listPrice;
    private $discount;

    function __construct(
        $orderId,
        $quantity,
        $listPrice,
        $discount
    ) {
        $this->orderId = $orderId;
        $this->quantity = $quantity;
        $this->listPrice = $listPrice;
        $this->discount = $discount;
    }


    public function getOrderId()
    {
        return $this->orderId;
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


    public function setOrderId($orderId)
    {
        return $this->orderId = $orderId;
    }
    public function setQuantity($quantity)
    {
        return $this->quantity = $quantity;
    }
    public function setListPrice($listPrice)
    {
        return $this->listPrice = $listPrice;
    }
    public function setDiscount($discount)
    {
        return $this->discount = $discount;
    }
}
