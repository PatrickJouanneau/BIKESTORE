<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller
{
    //

    public function facture()
    {
        return view(('Facture'));
    }
}
