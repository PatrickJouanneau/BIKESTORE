<?php

namespace app\Models\Manager;

use App\Models\Model\Login;



interface LoginManagerInterface
{
    public function login($email, $password);
}
