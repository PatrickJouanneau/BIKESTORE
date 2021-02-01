<?php

namespace App\Models\DAO;

use App\Exceptions\DaoException;
use Illuminate\Support\Facades\DB;
use App\Models\Model\SalesStaffs;
use App\Models\DAO\SalesStaffsDaoInterface;
use App\Models\DAO\SalesStoresDaoInterface;
use Exception;
use Illuminate\Support\Facades\Log;

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
        try {
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
                $staff->setProfil($row->profil);

                $store = $this->storeDao->getStoreById($row->store_id);
                $staff->setSalesStores($store);

                array_push($allStaffs, $staff);
            }
            return $allStaffs;
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }



    public function getStaffById($staffId)
    {
        try {
            $bdd = DB::getpdo();
            //error_log("****  ".$staffId);
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
            $staff->setProfil($resultBdd['profil']);

            $store = $this->storeDao->getStoreById($resultBdd['store_id']);
            $staff->setSalesStores($store);

            $staff->setManagerId($resultBdd['manager_id']);

            return $staff;
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }



    public function createStaff($staff)
    {
        try {
            DB::insert(
                "INSERT INTO sales.staffs
            (first_name, last_name, email, phone, active, store_id, manager_id, password, profil) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)",
                [
                    $staff->getFirstName(),
                    $staff->getLastName(),
                    $staff->getEmail(),
                    $staff->getPhone(),
                    $staff->getActive(),
                    $staff->getSalesStores()->getStoreId(),
                    $staff->getManagerId(),
                    $staff->getPassword(),
                    $staff->getProfil()
                ]
            );
            Log::debug("Utilisateur " . $staff->getFirstName() . " " . $staff->getLastName() . " ajouté");
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }


    public function updateStaff($staff)
    {
        try {
            DB::update("UPDATE sales.staffs SET
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
                $staff->getSalesStores()->getStoreId(),
                $staff->getManagerId(),
                $staff->getPassword(),
                $staff->getProfil(),
                $staff->getStaffId(),
            ]);
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }
}
