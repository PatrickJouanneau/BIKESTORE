<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesCustomers extends Contact
{
    use HasFactory;

    private $customerId = 0;
    private $street = null;
    private $city = null;
    private $state = null;
    private $zipCode = null;

    function __construct(
        $customerId,
        $street,
        $city,
        $state,
        $zipCode
    ) {
        $this->customerId = $customerId;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
    }

    public function getCustomerId()
    {
        return $this->customerId;
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


    public function setCustomerId($customerId)
    {
        return $this->customerId = $customerId;
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
    public function setZipCode($zipCode)
    {
        return $this->zipCode = $zipCode;
    }
}
