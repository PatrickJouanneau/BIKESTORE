<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\SalesCustomers;
use App\Models\Dao\SalesCustomersDaoInterface;


class SalesCustomersDaoImplement implements SalesCustomersDaoInterface
{

    public function getListeCustomers()
    {
        $resultBdd = DB::select("exec dbo.get_liste_customers");

        $listeCustomers = [];
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

            array_push($listeCustomers, $customer);
        }
        return $listeCustomers;
    }



    public function getAllCustomers()
    {
        $resultBdd = DB::select('exec dbo.get_all_customers');

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
        $reponse = $bdd->query("SELECT * FROM sales.customers WHERE customer_id = ' " . $id . " ' ");
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


    public function createCustomer(SalesCustomers $customer)
    {
        $resultBdd = DB::insert(
            "INSERT INTO sales.customers (
                first_name,
                last_name,
                phone,
                email,
                street,
                city,
                state,
                zip_code
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)",
            [
                $customer->getFirstName(),
                $customer->getLastName(),
                $customer->getPhone(),
                $customer->getEmail(),
                $customer->getStreet(),
                $customer->getCity(),
                $customer->getState(),
                $customer->getZipCode()
            ]
        );
    }

    public function updateCustomer($customer)
    {
        $resultBdd = DB::update("UPDATE sales.customers SET
            first_name = ?,
            last_name = ?,
            phone = ?,
            email = ?,
            street = ?,
            city = ?,
            state = ?,
            zip_code = ?
        WHERE customer_id = ?
        ", [
            $customer->getFirstName(),
            $customer->getLastName(),
            $customer->getPhone(),
            $customer->getEmail(),
            $customer->getStreet(),
            $customer->getCity(),
            $customer->getState(),
            $customer->getZipCode(),
            $customer->getCustomerId()
        ]);
    }
}
