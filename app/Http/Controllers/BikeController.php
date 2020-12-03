<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BikeController extends Controller
{
    // Méthode pour atteindre la page d'accueil

    public function accueil()
    {
        return view('FormLogin');
    }

    public function register()
    {
        return view('FormStaffs');
    }


    public function phpInfo()
    {
        return phpinfo();
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function bonjour()
    {
        echo "Bonjour les amis !";
    }

    public function categories()
    {
        $result = DB::select('SELECT first_name,last_name FROM sales.staffs');
        return $result;
    }

    public function order()
    {
        $result = DB::select('SELECT * FROM sales.order_items');
        return $result;
    }


    public function tables()
    {
        $tables = DB::select('SHOW TABLES');
        foreach ($tables as $table) {
            return $table->Tables_in_BikeStores;
        }
    }
}
