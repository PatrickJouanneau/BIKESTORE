<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\SalesCustomers;
use App\Models\Dao\SalesCustomersDaoInterface;


class SalesCustomersDaoImplement implements SalesCustomersDaoInterface
{

    public function getAllCustomers()
    {
        $resultBdd = DB::select("exec get_all_customers");

        $allCustomers = [];
        foreach ($resultBdd as $i => $row) {
            $customer = new SalesCustomers();
            $customer->setCustomerId($row->customer_id);
            $customer->setFirstName($row->first_name);
            $customer->setLastName($row->last_name);
            $customer->setPhone($row->phone);
            $customer->setEmail($row->email);
            $customer->setStreet($row->street);
            $customer->setCity($row->city);
            $customer->setState($row->state);
            $customer->setZipCode($row->zip_code);

            array_push($allCustomers, $customer);
        }
        return $allCustomers;
    }


    public function getCustomerById($id)
    {
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM sales.customers WHERE customer_id='" . $id . "'");
        $resultBdd = $reponse->fetch();

        $customer = new SalesCustomers();

        $customer->setFirstName($resultBdd['first_name']);
        $customer->setLastName($resultBdd['last_name']);
        $customer->setPhone($resultBdd['phone']);
        $customer->setEmail($resultBdd['email']);
        $customer->setStreet($resultBdd['street']);
        $customer->setCity($resultBdd['city']);
        $customer->setState($resultBdd['state']);
        $customer->setZipCode($resultBdd['zip_code']);

        return $customer;
    }


    public function createCustomer(SalesCustomers $customers)
    {
        $resultBdd = DB::insert("INSERT INTO sales.customers (first_name, last_name, phone, email, street, city, state, zip_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?)",
        [$customers->getFirstName()],
        [$customers->getLastName()],
        [$customers->getPhone()],
        [$customers->getEmail()],
        [$customers->getStreet()],
        [$customers->getCity()],
        [$customers->getState()],
        [$customers->getZipCode()]
     );
    }


}

