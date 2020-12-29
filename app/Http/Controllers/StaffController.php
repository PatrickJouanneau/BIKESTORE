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
        $stf = $request->input('first-name-stf');
        $stf = $request->input('last-name-stf');
        $stf = $request->input('email-stf');
        $stf = $request->input('phone-stf');
        $stf = $request->input('store-stf');
        $stf = $request->input('manager-stf');
        $stf = $request->input('profif-stf');
        $stf = $request->input('active');
        $stf = $request->input('password');

        $staff = new SalesStaffs();
        $staff->setFirstName($stf);
        $staff->setLastName($stf);
        $staff->setEmail($stf);
        $staff->setPhone($stf);
        $staff->setStoreId($stf);
        $staff->setManagerId($stf);
        $staff->setProfil($stf);
        $staff->setActive($stf);
        $staff->setpassword($stf);

        $staffsManager->createStaff($staff);
        return redirect('/success/');
    }

}
