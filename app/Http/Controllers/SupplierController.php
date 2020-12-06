<?php

namespace App\Http\Controllers;
use App\supplier;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SupplierController extends Controller
{
    //
    public function reg(Request $request)
    {

        $worker=new User();
        $worker->name=$request->NAME;
        $worker->email=$request->Email;
        $worker->password=Hash::make('12345678');
        $worker->save();

        $sup=new supplier();
        $sup->name= $request->NAME;
        $sup->address= $request->ADDRESS;
        $sup->area= $request->Area;
        $sup->user_id=$worker->id;
        $sup->phone_no= $request->PHONE_NO;
        $sup->email = $request->Email;
        $sup->save();

        return redirect('/soil');

    }

    public function supplier_info()
    {
        return view('supplier.mainform');
    }

}
