<?php

namespace App\Models\DAO;

use App\Models\Model\Login;


interface LoginDaoInterface
{
    public function login($email, $password);
}
