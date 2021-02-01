<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomerException;
use App\Http\Requests\CustomerRequest;
use App\Models\Manager\SalesCustomersManagerInterface;
use App\Models\Model\SalesCustomers;
use App\Models\Model\Contact;


class CustomerController extends Controller
{
    public function formCreateCust()
    {
        return view('/Customers/CustomerForm');
    }


    public function createCust(CustomerRequest  $request, SalesCustomersManagerInterface $CustomersManager)
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

        $CustomersManager->createCustomer($customer);
        return redirect('/success');
    }


    public function formUpdateCust(SalesCustomersManagerInterface $customersManager, $customerId)
    {
        $customer = $customersManager->getCustomerById($customerId);
        return view('Customers/CustomerFormUpdate')->with(
            [
            "customer" => $customer
            ]
        );
    }


    public function updateCust(CustomerRequest $request, SalesCustomersManagerInterface $customersManager, $customerId)
    {
        $cust = new SalesCustomers();
        $cust->setCustomerId($customerId);
        $cust->setFirstName($request->input("first-name"));
        $cust->setLastName($request->input("last-name"));
        $cust->setPhone($request->input("phone"));
        $cust->setEmail($request->input("email"));
        $cust->setStreet($request->input("street"));
        $cust->setCity($request->input("city"));
        $cust->setState($request->input("state"));
        $cust->setZipCode($request->input("zip-code"));

        $customersManager->updateCustomer($cust);
        return redirect('/success/');
    }



    public function allJsonCust(SalesCustomersManagerInterface $CustomersManager)
    {
        $customer = $CustomersManager->getAllCustomers();
        return response()->json($customer);
    }
}
