<?php

namespace App\Models\Model;


class ProductionStocks
{

    private $quantity;

    function __construct($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        return $this->quantity = $quantity;
    }
}
