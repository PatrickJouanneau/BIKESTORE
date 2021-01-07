<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductAutocompleteController extends Controller
{

    function formSelectProduct()
    {
        return view('Stocks.StockForm');
    }

    function selectProduct(Request $request)
    {


        if ($request->get('query')) {
            $query = $request->get('query');
            $data = DB::table('production.products')
                ->where('product_name', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach ($data as $row) {
                $output .= '
       <li><a href="#">' . $row->product_name . '</a></li>
       ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }
}
