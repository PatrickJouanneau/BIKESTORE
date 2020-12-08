<?php

namespace App\Models\DAO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SalesOrder_itemsDAO extends Model
{
    use HasFactory;

    function saveOrder_items()
    {
        $results = DB::insert('INSERT INTO sales.order_items (order_id, item_id, product_id, quantity, list_price, discount) VALUES (?, ?, ?, ?, ?, ?)', [1, 'Dayle']);
        return $results;
    }

    function getAllOrder_items()
    {
        $results = DB::select('SELECT * FROM sales.order_items');
        return $results;
    }
}
