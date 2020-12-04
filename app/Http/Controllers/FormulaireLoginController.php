<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use resources\Utils\function.php;
//use app\Models\Model\SalesStaffs.class.php;
//use app\Models\Manager\ContactManager.class.php;
//use app\Models\DAO\StaffsDAO.php;

class FormulaireLoginController extends Controller
{
    //

    public function formulaireLogin() {
        return view('FormulaireLogin');
    }

}
