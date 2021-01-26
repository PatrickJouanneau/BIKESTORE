<?php

namespace App\Models\Model;

use App\Models\Model\Contact;
use App\Models\Model\SalesStores;

class SalesStaffs extends Contact
{
    private $staffId;
    private $active;
    private $profil;
    private $password;
    private $passwordBis;

    private SalesStores $salesStores;




    public function getStaffId()
    {
        return $this->staffId;
    }
    public function getActive()
    {
        return $this->active;
    }
    public function getManagerId()
    {
        return $this->managerId;
    }
    public function getProfil()
    {
        return $this->profil;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getpasswordBis()
    {
        return $this->passwordBis;
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
    public function setManagerId($managerId)
    {
        $this->managerId = $managerId;
    }
    public  function setProfil($profil)
    {
        $this->profil = $profil;
    }
    public function setpassword($password)
    {
        $this->password = $password;
    }
    public function setpasswordBis($passwordBis)
    {
        $this->passwordBis = $passwordBis;
    }
    public function setSalesStores(SalesStores $salesStores)
    {
        $this->salesStores = $salesStores;
    }


    
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
