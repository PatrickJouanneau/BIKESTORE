<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\SalesStaffs;
use App\Models\DAO\SalesStaffsDaoInterface;
//use App\Models\Dao\SalesStoresDaoInterface;

class SalesStaffsDaoImplement implements SalesStaffsDaoInterface
{
    //private $storeDao;
    //private $managerDao;
    public function __construct(SalesStoresDaoInterface $storeDao)
    {
        $this->storeDao = $storeDao;
        //$this->managerDao = $managerDao;
    }

    public function getAllStaffs()
    {
        $bdd = DB::getpdo();
        $reponse = $bdd->query('SELECT * FROM sales.staffs');
        $resultBdd = $reponse->fetchAll();

        $allStaffs = [];
        foreach ($resultBdd as $i => $row) {
            $staff = new SalesStaffs();
            $staff->setStaffId($row['staff_id']);
            $staff->setFirstName($row['first_name']);
            $staff->setLastName($row['last_name']);
            $staff->setPhone($row['phone']);
            $staff->setEmail($row['email']);
            $staff->setActive($row['active']);
            $staff->setManagerId($row['manager_id']);
            //$staff->setPoste($row['poste']);

            $store = $this->storeDao->getStoreById($row['store_id']);
            $staff->setSalesStore($store);

            //$manager = $this->setManagerId($row['manager_id']);
            //$staff = $this->managerDao($manager);

            array_push($allStaffs, $staff);
        }
        return $allStaffs;
    }

    public function getStaffById($staffId)
    {
        $bdd = DB::getpdo();
        $reponse = $bdd->query("SELECT * FROM sales.staffs WHERE staff_id='" . $staffId . "'");
        $resultBdd = $reponse->fetch();

        $staff = new SalesStaffs();
        $staff->setStaffId($resultBdd['staff_id']);
        $staff->setFirstName($resultBdd['first_name']);
        $staff->setLastName($resultBdd['last_name']);
        $staff->setPhone($resultBdd['phone']);
        $staff->setEmail($resultBdd['email']);
        $staff->setActive($resultBdd['active']);
        $staff->setStoreId($resultBdd['store_id']);
        $staff->setManagerId($resultBdd['manager_Id']);
        //$staff->setPoste($resultBdd['poste']);

        return $staff;
    }
}
