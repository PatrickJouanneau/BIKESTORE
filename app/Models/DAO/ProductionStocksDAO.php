<?php

namespace App\Models\DAO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Model\ProductionStocks;

class StocksDAO
{
    use HasFactory;

    function saveStock()
   {
       $resultstok = DB::insert('INSERT INTO production.stocks (store_id, product_id, quantity) VALUES (?, ?, ?)');
   }


   function getAllStock()
   {
       $result = DB::select('SELECT * FROM production.stocks' );
       return $result;
   }
}
