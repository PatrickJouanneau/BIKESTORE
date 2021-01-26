<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Manager\SalesStoresManagerInterface;
use App\Models\Model\SalesStores;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function formCreateStr()
    {
        return view(('Stores/StoreForm'));
    }



    public function createStr(ProductRequest $request, SalesStoresManagerInterface $storesManager)
    {
        $name = $request->input('store-name');
        $street = $request->input('street');
        $city = $request->input('city');
        $code = $request->input('zip-code');
        $state = $request->input('state');
        $phone = $request->input('phone');
        $mail = $request->input('email');

        $store = new SalesStores();
        $store->setStoreName($name);
        $store->setStreet($street);
        $store->setCity($city);
        $store->setZipCode($code);
        $store->setState($state);
        $store->setPhone($phone);
        $store->setEmail($mail);

        $storesManager->createStore($store);
        return redirect('/success');
    }



    public function formUpdateStr(SalesStoresManagerInterface $storesManager, $storeId)
    {
        $store = $storesManager->getStoreById($storeId);

        return view('Stores/storeFormUpdate')->with(["store" => $store]);
    }



    public function updateStr(ProductRequest $request, SalesStoresManagerInterface $storesManager, $storeId)
    {
        $store = new SalesStores();
        $store->setStoreId($storeId);
        $store->setStoreName($request->input('store-name'));
        $store->setStreet($request->input('street'));
        $store->setCity($request->input('city'));
        $store->setZipCode($request->input('zip-code'));
        $store->setState($request->input('state'));
        $store->setPhone($request->input('phone'));
        $store->setEmail($request->input('email'));

        $storesManager->updateStore($store);
        return redirect('/success/');

    }
}
