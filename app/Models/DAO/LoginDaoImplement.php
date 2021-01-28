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
        return DB::select("select staff_id, first_name, last_name, profil, count(*) as count from sales.staffs where email='".$email."' and password='".$password."' GROUP BY staff_id, first_name, last_name, profil  "  )[0];

        /*
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
        */
    }
}
