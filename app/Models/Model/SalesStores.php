<?php

namespace App\Models\Model;

use JsonSerializable;

class SalesStores implements JsonSerializable
{
    private $storeId;
    private $storeName;
    private $phone;
    private $email;
    private $street;
    private $city;
    private $state;
    private $zipCode;



    public function getStoreId()
    {
        return $this->storeId;
    }
    public function getStoreName()
    {
        return $this->storeName;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getStreet()
    {
        return $this->street;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function getState()
    {
        return $this->state;
    }
    public function getZipCode()
    {
        return $this->zipCode;
    }


    




    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setStreet($street)
    {
        $this->street = $street;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }
    public function setState($state)
    {
        $this->state = $state;
    }
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->storeId,
            'name' => $this->storeName
        ];
    }
}
