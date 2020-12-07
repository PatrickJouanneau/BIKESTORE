<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrderItems
{
    use HasFactory;

    private $orderId = 0;
    private $quantity = 0;
    private $listPrice = 0;
    private $discount = 0;

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
