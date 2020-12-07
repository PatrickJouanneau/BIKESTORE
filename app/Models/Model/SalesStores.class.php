<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesStores
{
    use HasFactory;

    private $storeId;
    private $storeName;
    private $phone;
    private $email;
    private $street;
    private $city;
    private $state;
    private $zipcode;

    function __construct(
        $storeId,
        $storeName,
        $phone,
        $email,
        $street,
        $city,
        $state,
        $zipcode
    ) {
        $this->storeId = $storeId;
        $this->storeName = $storeName;
        $this->phone = $phone;
        $this->email = $email;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
    }

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
        return $this->storeId = $storeId;
    }
    public function setStoreName($storeName)
    {
        return $this->storeName = $storeName;
    }
    public function setPhone($phone)
    {
        return $this->phone = $phone;
    }
    public function setEmail($email)
    {
        return $this->email = $email;
    }
    public function setStreet($street)
    {
        return $this->street = $street;
    }
    public function setCity($city)
    {
        return $this->city = $city;
    }
    public function setState($state)
    {
        return $this->state = $state;
    }
    public function setZipCode($zipcode)
    {
        return $this->zipcode = $zipcode;
    }
}
