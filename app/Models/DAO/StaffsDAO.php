<?php

namespace App\Models\DAO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Model\ContactAdmins;
use App\Models\Model\SalesStaffs;

class StaffsDAO
{
    use HasFactory;

    function getAllStaffs(){
        $result = DB::select('SELECT staff_id, first_name, last_name, email, phone, active, store_id, manager_id FROM sales.staffs');

        $listStaffs = array();
        foreach ($result as $value) {
            $staffs = new SalesStaffs(
                $value->staffId,
                $value->firstName,
                $value->lastName,
                $value->email,
                $value->phone,
                $value->active,
                $value->storeId,
                $value->managerId
            );

            array_push($listStaffs, $staffs);
        }
        return $listStaffs;
    }


    
    function login($email, $password){
        $admin = new ContactAdmins($email, $password);
        $requser = DB::prepare("SELECT email, password FROM sales.staffs WHERE email = ? AND passwword = ?");
        $requser->execute(array($email, $password));
        $res = $requser->fetch();
        $requser->rowCount();
    
        if ($res){
            $admin->setFirstName($res['first_name']);
            $admin->setLastName($res['last_name']);
            $admin->setEmail($res['email']);
        }
        return $admin;
    }

}
