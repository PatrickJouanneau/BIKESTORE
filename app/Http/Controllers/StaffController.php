<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Models\Manager\SalesStaffsManagerInterface;
use App\Models\Model\SalesStaffs;
use App\Models\Manager\SalesStoresManagerInterface;


class StaffController extends Controller
{
    public function index()
    {
    }
    
    public function formCreateStf(SalesStaffsManagerInterface $staffsManager, SalesStoresManagerInterface $storesManager)
    {
        $staffs = $staffsManager->getAllStaffs();
        $stores = $storesManager->getAllStores();
        return view('/Staffs/StaffForm')->with(
            [
                'staffs' => $staffs,
                'stores' => $stores
            ]
        );
    }



    public function createStf(StaffRequest $request, SalesStoresManagerInterface $storeManager, SalesStaffsManagerInterface $staffsManager)
    {
        $first = $request->input('first-name-stf');
        $last = $request->input('last-name-stf');
        $mail = $request->input('email-stf');
        $tel = $request->input('phone-stf');
        $mag = $request->input('store-stf');
        $chef = $request->input('manager-stf');
        $poste = $request->input('profil-stf');
        $actif = $request->input('active');
        $mp = $request->input('password');
        $mpb = $request->input('passwordBis');

        $staff = new SalesStaffs();
        $staff->setFirstName($first);
        $staff->setLastName($last);
        $staff->setEmail($mail);
        $staff->setPhone($tel);
        $staff->setSalesStores($storeManager->getStoreById($mag));
        $staff->setManagerId($chef);
        $staff->setProfil($poste);
        $staff->setActive($actif);
        $staff->setpassword($mp);
        $staff->setpasswordBis($mpb);


        $staffsManager->createStaff($staff);
        return redirect('/success');
    }




    public function formUpdateStf(SalesStaffsManagerInterface $staffsManager, SalesStoresManagerInterface $storesManager, $staffId)
    {
        $staffs = $staffsManager->getStaffById($staffId);
        $stores = $storesManager->getAllStores();

        return view('/Staffs.StaffFormUpdate')->with(
            [
                'staffs' => $staffs,
                'stores' => $stores
            ]
        );
    }



    public function updateStf(StaffRequest $request, SalesStoresManagerInterface $storeManager, SalesStaffsManagerInterface $staffsManager, $staffId)
    {
        $staff = new SalesStaffs();
        $staff->setStaffId($staffId);
        $staff->setFirstName($request->input('first-name-stf'));
        $staff->setLastName($request->input('last-name-stf'));
        $staff->setEmail($request->input('email-stf'));
        $staff->setPhone($request->input('phone-stf'));
        $staff->setSalesStores($storeManager->getStoreById($request->input('store-stf')));
        $staff->setManagerId($request->input('manager-stf'));
        $staff->setProfil($request->input('profil-stf'));
        $staff->setActive($request->input('active'));
        $staff->setpassword($request->input('password'));
        $staff->setpasswordBis($request->input('passwordBis'));

        $staffsManager->updateStaff($staff);
        return redirect('/success/');
    }
}
