<?php

namespace App\Models\DAO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SalesOrdersDAO extends Model
{
    use HasFactory;

    function saveOrder()
    {
        $results = DB::insert('INSERT INTO sales.orders (order_id, customer_id, order_status, order_date, required_date, shipped_date, store_id, staff_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Dayle']);
        return $results;
    }

    function getAllOrders()
    {
        $results = DB::select('SELECT * FROM sales.orders');
        return $results;
    }
}
