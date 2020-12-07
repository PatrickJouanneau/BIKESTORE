<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesStaffs extends Contact
{
    use HasFactory;

    private $staffId = 0;
    private $active = null;
    private $storeId = null;
    private $managerId = null;

    function __construct(
        $staffId,
        $active,
        $storeId,
        $managerId
    ) {
        $this->staffId = $staffId;
        $this->active = $active;
        $this->storeId = $storeId;
        $this->managerId = $managerId;
    }

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



    public function setStaffId($staffId)
    {
        return $this->staffId = $staffId;
    }
    public function setActive($active)
    {
        return $this->active = $active;
    }
    public function setStoreId($storeId)
    {
        return $this->storeId = $storeId;
    }
    public function setManagerId($managerId)
    {
        return $this->managerId = $managerId;
    }
}
