<?php

namespace App\Http\Controllers;

use app\Models\Manager\LoginManagerInterface;
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
        //return view('Staffs.StaffFormUpdate');
    }


    public function login(Request $request, LoginManagerInterface $loginManager)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $loginManager->login($email, $password);


        return redirect('/');
    }

    public function logout(){

        session(['connection' => null]);
        return redirect('formLogin');
    }

}
