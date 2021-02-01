<?php

namespace App\Models\Manager;

use App\Exceptions\StaffException;
use App\Models\DAO\SalesStaffsDaoInterface;
use App\Models\Manager\SalesStaffsManagerInterface;
use App\Models\Model\SalesStaffs;

class SalesStaffsManagerImplement implements SalesStaffsManagerInterface
{
    private $staffsDao;
    public function __construct(SalesStaffsDaoInterface $staffsDao)
    {
        $this->staffsDao = $staffsDao;
    }



    public function getAllStaffs()
    {
        return $this->staffsDao->getAllStaffs();
    }



    public function getStaffById($staffId)
    {
        return $this->staffsDao->getStaffById($staffId);
    }



    public function createStaff(SalesStaffs $staffs)
    {
        $this->staffsDao->createStaff($staffs);
    }


    
    public function updateStaff(SalesStaffs $staffs)
    {
        $this->staffsDao->updateStaff($staffs);
    }
}
