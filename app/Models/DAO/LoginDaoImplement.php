<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\Login;
use App\Models\DAO\LoginDaoInterface;
use app\Models\Manager\LoginManagerInterface;



class LoginDaoImplement implements LoginDaoInterface
{
    public function login($email, $password)
    {

        $user = new Login();
        $resultBdd = DB::select("SELECT email, password, staff_id, first_name, last_name FROM sales.staffs WHERE email='".$email."' AND password='".$password."' ")[0];

        if ($resultBdd) {
            $user->setEmail($resultBdd['email']);
            $user->setpassword($resultBdd['password']);
            $user->setContactId($resultBdd['contact_id']);
            $user->setFirstName($resultBdd['first_name']);
            $user->setLastName($resultBdd['last_name']);
        }
        return $user;

    }
}
