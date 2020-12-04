<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use resources\Utils\function.php;
//use app\Models\Model\SalesStaffs.class.php;
//use app\Models\Manager\ContactManager.class.php;
//use app\Models\DAO\StaffsDAO.php;

class FormulaireStaffController extends Controller
{
    //
    public function formulaireStaff()
    {
        return view('FormulaireStaff');
    }

    public function saveFormulaireStaff()
    {
        return view('saveFormulaireStaff');
    }

}
