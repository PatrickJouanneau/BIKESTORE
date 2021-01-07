<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\SalesStaffs;
use App\Models\DAO\SalesStaffsDaoInterface;
use App\Models\Manager\SalesStaffsManagerInterface;

class SalesStaffsDaoImplement implements SalesStaffsDaoInterface
{
    private $storeDao;
    public function __construct(
        SalesStoresDaoInterface $storeDao
    ) {
        $this->storeDao = $storeDao;
    }

    public function getAllStaffs()
    {
        $resultBdd = DB::select("exec get_all_staffs");

        $allStaffs = [];
        foreach ($resultBdd as $i => $row) {
            $staff = new SalesStaffs();
            $staff->setStaffId($row->staff_id);
            $staff->setFirstName($row->first_name);
            $staff->setLastName($row->last_name);
            $staff->setPhone($row->phone);
            $staff->setEmail($row->email);
            $staff->setActive($row->active);
            $staff->setManagerId($row->manager_id);

            $store = $this->storeDao->getStoreById($row->store_id);
            $staff->setSalesStores($store);

            array_push($allStaffs, $staff);
        }
        return $allStaffs;
    }



    public function getStaffById($staffId)
    {
        $bdd = DB::getpdo();
        $reponse = $bdd->query(
            "SELECT * FROM sales.staffs WHERE staff_id = '" . $staffId . "'"
        );
        $resultBdd = $reponse->fetch();

        $staff = new SalesStaffs();
        $staff->setStaffId($resultBdd['staff_id']);
        $staff->setFirstName($resultBdd['first_name']);
        $staff->setLastName($resultBdd['last_name']);
        $staff->setPhone($resultBdd['phone']);
        $staff->setEmail($resultBdd['email']);
        $staff->setActive($resultBdd['active']);
        $staff->setStoreId($resultBdd['store_id']);
        $staff->setManagerId($resultBdd['manager_id']);

        return $staff;
    }



    public function createStaff($staff)
    {
        $resultBdd = DB::insert(
            "INSERT INTO sales.staffs (first_name, last_name, email, phone, active, store_id, manager_id, password, profil) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)",
            [
                $staff->getFirstName(),
                $staff->getLastName(),
                $staff->getEmail(),
                $staff->getPhone(),
                $staff->getActive(),
                $staff->getStoreId(),
                $staff->getManagerId(),
                $staff->getPassword(),
                $staff->getProfil()
            ]
        );
    }


    public function updateStaff($staff)
    {
        $resultBdd = DB::update("UPDATE sales.staffs SET
            first_name = ?,
            last_name = ?,
            email = ?,
            phone = ?,
            active = ?,
            store_id = ?,
            manager_id = ?,
            password = ?,
            profil = ?
        WHERE staff_id = ?
        ", [
            $staff->getFirstName(),
            $staff->getLastName(),
            $staff->getEmail(),
            $staff->getPhone(),
            $staff->getActive(),
            $staff->getStoreId(),
            $staff->getManagerId(),
            $staff->getPassword(),
            $staff->getProfil()
        ]);
    }
}
