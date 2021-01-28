<?php

namespace App\Models\DAO;

use App\Models\Model\Login;
use App\Models\DAO\LoginDaoImplement;
use App\Models\Manager\LoginManagerImplement;
use app\Models\Manager\LoginManagerInterface;
use App\Http\Controllers\LoginController;



interface LoginDaoInterface
{
    public function login($email, $password);
}
