<?php

namespace App\Models\DAO;

use App\Exceptions\DaoException;
use App\Exceptions\LoginException;
use Illuminate\Support\Facades\DB;
use App\Models\Model\Login;
use App\Models\DAO\LoginDaoInterface;
use app\Models\Manager\LoginManagerInterface;
use Exception;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;

class LoginDaoImplement implements LoginDaoInterface
{
    public function login($email, $password)
    {
        try {
            $result = DB::select("select staff_id, first_name, last_name, profil, count(*) as count from sales.staffs where email='" . $email . "' and password='" . $password . "' GROUP BY staff_id, first_name, last_name, profil  ");
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }

        if (!empty($result)) {
            return $result[0];
        } else {
            throw new LoginException("credentials incorrect");
        }
    }
}
