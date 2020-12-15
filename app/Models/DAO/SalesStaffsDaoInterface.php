<?php

namespace App\Models\DAO;


interface SalesStaffsDaoInterface
{
    public function getAllStaffs();
    public function getStaffById($staffId);
}
