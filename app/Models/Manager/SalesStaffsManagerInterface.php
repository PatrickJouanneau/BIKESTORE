<?php

namespace App\Models\Manager;

use App\Models\Model\SalesStaffs;

interface SalesStaffsManagerInterface
{
    public function getAllStaffs();
    public function getStaffById($staffId);
    public function createStaff(SalesStaffs $staffs);
}
