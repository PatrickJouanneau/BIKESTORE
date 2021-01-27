<?php

namespace App\Models\Manager;

use App\Models\Model\ProdProductAudit;
use App\Models\Dao\ProdProductAuditDaoInterface;
use App\Models\Manager\ProdProductAuditManagerInterface;



class ProdProductAuditManagerImplement implements ProdProductAuditManagerInterface
{
    private $productAuditDao;
    public function __construct(ProdProductAuditDaoInterface $productAuditDao)
    {
        $this->productAuditDao = $productAuditDao;
    }


    public function getAllProductAudits()
    {
        return $this->productAuditDao->getAllProductAudits();
    }
}
