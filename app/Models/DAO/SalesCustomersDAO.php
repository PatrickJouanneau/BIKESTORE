<?php

namespace App\Models\DAO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SalesCustomersDAO extends Model
{
    use HasFactory;

    function saveCustomer()
    {
        $results = DB::insert('INSERT INTO sales.customers (customer_id, first_name, last_name, phone, email, street, city, state, zip_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Dayle']);
        return $results;
    }

    function getAllCustomers()
    {
        $results = DB::select('SELECT * FROM sales.customers');
        return $results;
    }
}
