<?php

namespace App\Http\Controllers;

use app\Models\Manager\LoginManagerInterface;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function formulaireLogin()
    {
        return view('Login');
    }


    public function login(Request $request, LoginManagerInterface $loginManager)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $loginManager->login($email, $password);

        if (['email' => $email, 'password' => $password]) {
            // Success
            return redirect()->intended('/');
        } else {
            // Revenir sur l'erreur (ou faire ce que vous voulez)
            return redirect('formLogin')->back();
        }

    }

    public function logout()
    {
        session(['connection' => null]);
        return redirect('formLogin');
    }
}
