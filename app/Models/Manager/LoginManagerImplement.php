<?php

namespace App\Models\Manager;

use App\Exceptions\LoginException;
use App\Models\Manager\LoginManagerInterface;
use App\Models\DAO\LoginDaoInterface;
use App\Models\Model\Login;



class LoginManagerImplement implements LoginManagerInterface
{

/*
    private $loginDao;
    public function __construct(LoginDaoInterface $loginDao)
    {
        $this->loginDao = $loginDao;
    }
*/

    public function login($email, $password)
    {
        //return $this->loginDao->login($email, $password);


        $connect = true;
        if ($connect) {
            session(['connection' => 14 ]);
        }

    }

}
