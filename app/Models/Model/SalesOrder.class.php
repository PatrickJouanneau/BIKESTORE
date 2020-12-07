<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder
{
    use HasFactory;

    private $orderStatus = 0;
    private $orderDate = null;
    private $requiredDate = null;
    private $shippedDate = null;

    function __construct(
        $orderStatus,
        $orderDate,
        $requiredDate,
        $shippedDate
    ) {
        return $this->orderStatus = $orderStatus;
        return $this->orderDate = $orderDate;
        return $this->requiredDate = $requiredDate;
        return $this->shippedDate = $shippedDate;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }
    public function getOrderDate()
    {
        return $this->orderDate;
    }
    public function getRequiredDate()
    {
        return $this->requiredDate;
    }
    public function getShippedDate()
    {
        return $this->shippedDate;
    }

    public function setOrderStatus($orderStatus)
    {
        return $this->orderStatus = $orderStatus;
    }
    public function setOrderDate($orderDate)
    {
        return $this->orderDate = $orderDate;
    }
    public function setRequiredDate($requiredDate)
    {
        return $this->requiredDate = $requiredDate;
    }
    public function setShippedDate($shippedDate)
    {
        return $this->shippedDate = $shippedDate;
    }
}
