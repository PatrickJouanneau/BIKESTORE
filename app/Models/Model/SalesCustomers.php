<?php

namespace App\Models\Model;

use App\Models\Model\Contact;
use JsonSerializable;

class SalesCustomers extends Contact
{
    private $customerId;
    private $street;
    private $city;
    private $state;
    private $zipCode;


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
        $this->customerId = $customerId;
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
            "id"     => $this->customerId,
            "prenom" => $this->firstName,
            "nom"    => $this->lastName,
            "street" => $this->street,
            "city"   => $this->city,
            "cp"     => $this->zipCode,
            "state"  => $this->state,
            "phone"  => $this->phone,
            "mail"   => $this->email
        ];
    }
}
