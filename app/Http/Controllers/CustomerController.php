<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomerException;
use App\Http\Requests\CustomerRequest;
use App\Models\Manager\SalesCustomersManagerInterface;
use App\Models\Model\SalesCustomers;
use Symfony\Component\Console\Logger\ConsoleLogger;

class CustomerController extends Controller
{
    public function formCreateCust()
    {
        return view('/Customers.CustomerForm');
    }


    public function createCust(CustomerRequest  $request, SalesCustomersManagerInterface $CustomerManager)
    {
        $cust = $request->input('last-name');
        $cust = $request->input('first-name');
        $cust = $request->input('phone');
        $cust = $request->input('email');
        $cust = $request->input('street');
        $cust = $request->input('zip-code');
        $cust = $request->input('city');
        $cust = $request->input('state');

        $customer = new SalesCustomers();
        $customer->setLastName($cust);
        $customer->setFirstName($cust);
        $customer->setPhone($cust);
        $customer->setEmail($cust);
        $customer->setStreet($cust);
        $customer->setZipCode($cust);
        $customer->setCity($cust);
        $customer->setState($cust);

        $CustomerManager->createCustomer($customer);
        return redirect('/success/');
        echo $customer;
    }

}
