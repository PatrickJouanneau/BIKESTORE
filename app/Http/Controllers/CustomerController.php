<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomerException;
use App\Http\Requests\CustomerRequest;
use App\Models\Manager\SalesCustomersManagerInterface;
use App\Models\Model\SalesCustomers;


class CustomerController extends Controller
{




    public function formCreateCust()
    {
        return view('/Customers.CustomerForm');
    }


    public function createCust(CustomerRequest  $request, SalesCustomersManagerInterface $CustomerManager)
    {
        $first = $request->input('first-name');
        $last = $request->input('last-name');
        $phone = $request->input('phone');
        $mail = $request->input('email');
        $add = $request->input('street');
        $ville = $request->input('city');
        $etat = $request->input('state');
        $cp = $request->input('zip-code');

        $customer = new SalesCustomers();
        $customer->setFirstName($first);
        $customer->setLastName($last);
        $customer->setPhone($phone);
        $customer->setEmail($mail);
        $customer->setStreet($add);
        $customer->setCity($ville);
        $customer->setState($etat);
        $customer->setZipCode($cp);

        $CustomerManager->createCustomer($customer);
        return redirect('/success');

    }

    public function allJsonCust(SalesCustomersManagerInterface $CustomerManager)
    {
        $customer = $CustomerManager->getAllCustomers();
        return response()->json($customer);
    }

}
