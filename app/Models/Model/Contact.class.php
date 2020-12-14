<?php

namespace App\Models\Model;


class Contact
{
    private $contactId;
    private $firstName;
    private $lastName;
    private $phone;
    private $email;


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
        $this->contactId = $contactId;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
