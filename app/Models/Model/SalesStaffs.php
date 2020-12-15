<?php

namespace App\Models\Model;

use App\Models\Model\Contact;

class SalesStaffs extends Contact
{
    private $staffId;
    private $active;
    private $storeId;
    private $managerId;

    private SalesStores $salesStores;



    public function getStaffId()
    {
        return $this->staffId;
    }
    public function getActive()
    {
        return $this->active;
    }
    public function getStoreId()
    {
        return $this->storeId;
    }
    public function getManagerId()
    {
        return $this->managerId;
    }
    public function getSalesStores(): SalesStores
    {
        return $this->salesStores;
    }



    public function setStaffId($staffId)
    {
        $this->staffId = $staffId;
    }
    public function setActive($active)
    {
        $this->active = $active;
    }
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }
    public function setManagerId($managerId)
    {
        $this->managerId = $managerId;
    }
    public function setSalesStores(SalesStores $salesStores)
    {
        $this->salesStores = $salesStores;
    }
}
