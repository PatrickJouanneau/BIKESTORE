<?php

namespace App\Models\Model;

use JsonSerializable;

class SalesOrders implements JsonSerializable
{
    private int $orderId;
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


    public function jsonSerialize()
    {

        /*
        $arr = [];

        if ($this->id != null) {
            $arr["id"] = $this->id;
        }
        if ($this->status != null) {
            $arr["status"] = $this->status;
        }
        if ($this->ordDat != null) {
            $arr["ordDat"] = $this->ordDat;
        }

        if ($this->reqDat != null) {
            $arr["reqDat"] = $this->reqDat;
        }
        if ($this->shipDat != null) {
            $arr["shipDat"] = $this->shipDat;
        }

        if (isset($this->salesCustomers) && $this->salesCustomers->getLastName() != null) {
            $arr["cust"] = $this->salesCustomers->getLastName();
        }
        if (isset($this->salesCustomers) && $this->salesCustomers->getCustomerId() != null) {
            $arr["cust"] = $this->salesCustomers->getCustomerId();
        }

        if (isset($this->salesStores) && $this->salesStores->getStoreName() != null) {
            $arr["store"] = $this->salesStores->getStoreName();
        }
        if (isset($this->salesStores) && $this->salesStores->getStoreId() != null) {
            $arr["store"] = $this->salesStores->getStoreId();
        }

        if (isset($this->salesStaffs) && $this->salesStaffs->getLastName() != null) {
            $arr["staff"] = $this->salesStaffs->getLastName();
        }
        if (isset($this->salesStaffs) && $this->salesStaffs->getstaffId() != null) {
            $arr["staff"] = $this->salesStaffs->getstaffId();
        }


        return $arr;

        */
        return [
            "id"      => $this->orderId,
            "cust"    => $this->salesCustomers->getLastName(),
            "status"  => $this->orderStatus,
            "ordDat"  => $this->orderDate,
            "reqDat"  => $this->requiredDate,
            "shipDat" => $this->shippedDate,
            "store"   => $this->salesStores->getStoreName(),
            "staff"   => $this->salesStaffs->getLastName()
        ];
    }
}
