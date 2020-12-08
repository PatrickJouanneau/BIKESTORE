<?php

namespace App\Models\DAO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SalesStoresDAO extends Model
{
    use HasFactory;

    function saveStore()
    {
        $results = DB::insert('INSERT INTO sales.stores (store_id, store_name, phone, email, street, city, state, zip_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Dayle']);
        return $results;
    }

    function getAllStore()
    {
        $results = DB::select('SELECT * FROM sales.stores ');
        return $results;
    }
}
