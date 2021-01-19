<?php

namespace App\Http\Controllers;

use app\Models\Manager\LoginManagerInterface;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('FormulaireLogin');
    }

    public function login(Request $request, LoginManagerInterface $loginManager)
    {
        //me connecter
    /*
    if ($notConnected){
        redirect()->back()->whit(['message'=>mon message]);
    }
    */
        $loginManager->login($request->input('email'), $request->input('password'));

        return redirect()->route('/');
    }
}
