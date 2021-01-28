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

        $loginInformation = $this->loginDao->logIn($email, $password) ;
        $authenticated = $loginInformation->count != 0;
        if ($authenticated) {
            Session::put("connection", 'true');
            Session::put("firstname", $loginInformation->first_name);
            Session::put("lastname", $loginInformation->last_name);
            Session::put("staff_id", $loginInformation->staff_id);
            Session::put("profil", $loginInformation->profil);
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
