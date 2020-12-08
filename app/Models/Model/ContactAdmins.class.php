<?php

namespace App\Models\Model;


class ContactAdmins extends Contact
{
    public $password;
    public $passwordBis;

    function __construct(
        $password,
        $passwordBis
    ) {
        $this->passWord = $password;
        $this->passwordBis = $passwordBis;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function getPasswordBis()
    {
        return $this->passwordBis;
    }


    public function setPassword($password)
    {
        return $this->password = $password;
    }
    public function setPasswordBis($passwordBis)
    {
        return $this->passwordBis = $passwordBis;
    }
}
