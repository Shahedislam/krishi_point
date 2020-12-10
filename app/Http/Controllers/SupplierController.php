<?php

namespace App\Http\Controllers;
use App\supplier;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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


    public function assign_supplier($id)
    {

        $soil_info=DB::table("programs")->join("payments","programs.id","payments.farmer_id")->where ('payments.id',$id)->first();
             $supplier_info=supplier::all();

        return view('local-operator.supplier_view',compact('soil_info','supplier_info'));;
    }

}
