<?php

namespace App\Http\Controllers;
use App\supplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function reg(Request $request)
    {
        $sup=new supplier();
        $sup->name= $request->NAME;
        $sup->address= $request->ADDRESS;
        $sup->area= $request->Area;
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
