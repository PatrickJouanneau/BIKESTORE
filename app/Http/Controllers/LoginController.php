<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('FormulaireLogin');
    }

    public function login(Request $request)
    {
    //me connecter
    /*
    if ($notConnected){
        redirect()->back()->whit(['message'=>mon message]);
    }
    */

    return redirect()->route('/');
    }
}
