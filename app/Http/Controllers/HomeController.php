<?php

namespace App\Http\Controllers;

use App\Models\DAO;
use App\Models\Manager\ProdBrandsManagerImplement;
use App\Models\Manager\ProdBrandsManagerInterface;
use App\Models\DAO\ProdBrandsDaoImplement;
use App\Models\DAO\ProdBrandsDaoInterface;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(
        ProdBrandsManagerInterface $brandsManager
    ) {
        // je dois faire appel au controller 'BrandsController' pour
        // pouvoir afficher le tableau 'ListeBrands'
        $brands = $brandsManager->getAllBrands();
        return view('home', [
            'brands' => $brands,
        ]);
        //echo "Bonjour les amis !";
    }


    public function phpinfo()
    {
        return phpinfo();
        //echo "Bonjour les amis !";
    }
}
