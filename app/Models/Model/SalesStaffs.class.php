<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesStaffs
{
    use HasFactory;

    private $staffId = 0;
    private $firstName = null;
    private $lastName = null;
    private $email = null;
    private $phone = null;
    private $active = null;
    private $storeId = null;
    private $managerId = null;
    
    function __construct($staffId,$firstName,$lastName,$email,$phone,$active, $storeId, $managerId) {
        $this->staffId = $staffId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->active = $active;
        $this->storeId = $storeId;
        $this->managerId = $managerId;
    }

    public function getStaffId()
    {
        return $this->staffId;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPhone()
    {
        return $this->phone;
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
    public function setFirstName($firstName)
    {
        return $this->firstName = $firstName;
    }
    public function setLastName($lastName)
    {
        return $this->lastName = $lastName;
    }
    public function setEmail($email)
    {
        return $this->email = $email;
    }
    public function setPhone($phone)
    {
        return $this->phone = $phone;
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
