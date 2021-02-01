<?php

namespace App\Http\Controllers;

use app\Models\Manager\LoginManagerInterface;
use Exception;
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

        try {
            $loginManager->login($email, $password);
            return redirect()->intended('/');
        } catch (Exception $e) {
            error_log("not work");
            return redirect('formLogin');
        }

        //if (['email' => $email, 'password' => $password]) {
        // Success
        //} else {
        // Revenir sur l'erreur (ou faire ce que vous voulez)

        //}
    }

    public function logout()
    {
        session(['connection' => null]);
        session(['firstname' => null]);
        session(['lastname' => null]);
        session(['profil' => null]);
        session(['staff_id' => null]);

        return redirect('formLogin');
    }
}
