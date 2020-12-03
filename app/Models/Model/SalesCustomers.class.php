<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesCustomers
{
    use HasFactory;

    private $customerId = 0;
    private $firstName = null;
    private $lastName = null;
    private $phone = null;
    private $email = null;
    private $street = null;
    private $city = null;
    private $state = null;
    private $zipCode = null;
    private $ordersId;

    function __construct(
        $customerId,
        $firstName,
        $lastName,
        $phone,
        $email,
        $street,
        $city,
        $state,
        $zipCode
    ) {
        $this->customerId = $customerId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->email = $email;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
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


    public function setCustomerId($customerId)
    {
        return $this->customerId = $customerId;
    }
    public function setFirstName($firstName)
    {
        return $this->firstName = $firstName;
    }
    public function setLastName($lastName)
    {
        return $this->lastName = $lastName;
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
    public function setZipCode($zipCode)
    {
        return $this->zipCode = $zipCode;
    }
}
