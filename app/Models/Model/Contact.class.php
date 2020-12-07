<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact
{
    use HasFactory;

    private $contactId = 0;
    private $firstName = null;
    private $lastName = null;
    private $phone = null;
    private $email = null;

    function __construct(
        $customerId,
        $firstName,
        $lastName,
        $phone,
        $email
    ) {
        $this->customerId = $customerId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getContactId()
    {
        return $this->contactId;
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



    public function setContactId($contactId)
    {
        return $this->contactId = $contactId;
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
}
