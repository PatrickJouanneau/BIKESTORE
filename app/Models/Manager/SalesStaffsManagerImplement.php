<?php

namespace App\Models\Manager;

use App\Models\DAO\SalesStaffsDaoInterface;
use App\Models\Manager\SalesStaffsManagerInterface;

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
}
