<?php

namespace App\Http\Controllers;
use App\supplier;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function farmer_sample()
    {
        $soil_info=DB::table("programs")
            ->join("payments","programs.id","payments.farmer_id")
            ->join("assign_suppliers","assign_suppliers.farmer_id","payments.id")
            ->join("suppliers","suppliers.user_id","assign_suppliers.supplier_name")
            ->select('payments.Payment_number','payments.test_name','programs.NAME','programs.FARMER_ID','programs.PHONE_NO','programs.ADDRESS','programs.SOIL_ID','assign_suppliers.id')
            ->where('assign_suppliers.supplier_name',Auth::id())->orderBy('assign_suppliers.id','desc')->get();

        return view('supplier.farmer_sample',compact('soil_info'));
    }

    public function dashboard()
    {
        return view('supplier.dashboard');
    }


    public function view_supplier()
    {
        $supplier_info=supplier::all();
        return view('Administrator.view_supplier',compact('supplier_info'));
    }



public function sup_mainpage()
{
    return view('supplier.supplier_mainpage');
}

    public function delete_supplier($id)
    {
        $delete=supplier::find($id);
        $delete->delete();
        return redirect('admin');
    }


}
