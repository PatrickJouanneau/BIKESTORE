<?php

namespace App\Models\Manager;

use App\Models\Manager\LoginManagerInterface;

class LoginManagerImplement implements LoginManagerInterface
{
    public function login($email, $password){
        // dao call function

        $connect = true;

        if($connect){
            session(['connection' => 14]);
        }

    }
}