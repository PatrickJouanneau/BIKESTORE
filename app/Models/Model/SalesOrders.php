<?php

namespace App\Models\Model;


class SalesOrders
{
    private $orderId;
    private $orderStatus;
    private $orderDate;
    private $requiredDate;
    private $shippedDate;

    private SalesCustomers $salesCustomers;
    private SalesStores $salesStores;
    private SalesStaffs $salesStaffs;

    public function getOrderId()
    {
        return $this->orderId;
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
    public function getSalesCustomers(): SalesCustomers
    {
        return $this->salesCustomers;
    }
    public function getSalesStores(): SalesStores
    {
        return $this->salesStores;
    }
    public function getSalesStaffs(): SalesStaffs
    {
        return $this->salesStaffs;
    }

    public function setorderId($orderId)
    {
        $this->orderId = $orderId;
    }
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
    }
    public function setRequiredDate($requiredDate)
    {
        $this->requiredDate = $requiredDate;
    }
    public function setShippedDate($shippedDate)
    {
        $this->shippedDate = $shippedDate;
    }
    public function setSalesCustomers(SalesCustomers $salesCustomers)
    {
        $this->salesCustomers = $salesCustomers;
    }
    public function setSalesStores(SalesStores $salesStores)
    {
        $this->salesStores = $salesStores;
    }
    public function setSalesStaffs(SalesStaffs $salesStaffs)
    {
        $this->salesStaffs = $salesStaffs;
    }
}
