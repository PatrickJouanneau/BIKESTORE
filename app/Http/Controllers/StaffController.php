<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Models\Manager\SalesStaffsManagerInterface;
use App\Models\Model\SalesStaffs;

class StaffController extends Controller
{
    public function formCreateStf()
    {
        return view('/Staffs.staffForm');
    }


    public function createStf(StaffRequest $request, SalesStaffsManagerInterface $staffsManager)
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

        $staff = new SalesStaffs();
        $staff->setFirstName($first);
        $staff->setLastName($last);
        $staff->setEmail($mail);
        $staff->setPhone($tel);
        $staff->setStoreId($mag);
        $staff->setManagerId($chef);
        $staff->setProfil($poste);
        $staff->setActive($actif);
        $staff->setpassword($mp);

        $staffsManager->createStaff($staff);
        return redirect('/success/');
    }

    public function formUpdateStf(SalesStaffsManagerInterface $staffsManager)
    {
        $staff = $staffsManager->getAllStaffs();
        return view('Staffs.StaffFormUpdate')->with(['staff' => $staff]);
    }


    public function updateStaff(StaffRequest $request, SalesStaffsManagerInterface $staffsManager, $staffId)
    {
        $staff = new SalesStaffs();
        $staff->setStaffId($staffId);
        $staff->setFirstName($request->input('first-name-stf'));
        $staff->setLastName($request->input('last-name-stf'));
        $staff->setEmail($request->input('email-stf'));
        $staff->setPhone($request->input('phone-stf'));
        $staff->setStoreId($request->input('store-stf'));
        $staff->setManagerId($request->input('manager-stf'));
        $staff->setProfil($request->input('profil-stf'));
        $staff->setActive($request->input('active'));
        $staff->setpassword($request->input('password'));

        $staffsManager->updateStaff($staff);
        return redirect('/success/');
    }
}
