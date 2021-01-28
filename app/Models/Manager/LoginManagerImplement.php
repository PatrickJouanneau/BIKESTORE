<?php

namespace App\Models\Manager;

use App\Exceptions\LoginException;
use App\Models\Manager\LoginManagerInterface;
use App\Models\DAO\LoginDaoInterface;
use Illuminate\Support\Facades\Session;
use App\Models\Model\Login;



class LoginManagerImplement implements LoginManagerInterface
{

    private $loginDao;
    public function __construct(LoginDaoInterface $loginDao)
    {
        $this->loginDao = $loginDao;
    }


    public function login($email, $password)
    {

        $authenticated = $this->loginDao->logIn($email, $password) != 0;
        if ($authenticated) {
            Session::put("connection", 'true');
        } else {
            throw new LoginException('Désolé il y des erreurs');
        }

        /*
        $connect = true;
        if ($connect) {
            session(['connection' => 14 ]);
        }
        */
    }
}
