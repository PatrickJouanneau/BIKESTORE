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


    Public function createStf(StaffRequest $request, SalesStaffsManagerInterface $staffsManager)
    {
        $first = $request->input('first-name-stf');
        $last = $request->input('last-name-stf');
        $mail = $request->input('email-stf');
        $tel = $request->input('phone-stf');
        $mag = $request->input('store-stf');
        $chef = $request->input('manager-stf');
        $poste = $request->input('profif-stf');
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

}
