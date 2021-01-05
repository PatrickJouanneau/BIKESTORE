<?php

namespace App\Models\DAO;

use App\Models\Model\SalesStaffs;

interface SalesStaffsDaoInterface
{
    public function getAllStaffs();
    public function getStaffById($staffId);
    public function createStaff(SalesStaffs $staffs);
}
