<?php

namespace App\Http\Controllers;
use App\supplier;
use App\tester;

use App\manager;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TesterController extends Controller
{
    //

    public function reg(Request $request)
    {
        $worker=new User();
        $worker->name=$request->NAME;
        $worker->email=$request->Email;
        $worker->password=Hash::make('12345678');
        $worker->save();

        $test=new tester();
        $test->name= $request->NAME;
        $test->address= $request->ADDRESS;
        $test->user_id=$worker->id;
        $test->phone_no= $request->PHONE_NO;
        $test->email = $request->Email;
        $test->password= $request->password;
        $test->designation= $request->designation;
        $test->institute= $request->institute;
        $test->save();

        return redirect('/tester');

    }

    public function tester_info()
    {
        return view('tester.tester_form');
    }

    public function view_tester()
    {
        $tester_info=tester::all();
        return view('Administrator.view_tester',compact('tester_info'));
    }
    public function view_homepage()
    {
        return view('Tester.tester_homepage');
    }


    public function assign_tester($id)
    {
        $soil_info=DB::table("programs")
            ->join("payments","programs.id","payments.farmer_id")
            ->join("assign_suppliers","assign_suppliers.farmer_id","payments.id")
            ->join("suppliers","suppliers.user_id","assign_suppliers.supplier_name")
            ->select('payments.Payment_number','payments.test_name','programs.NAME','programs.FARMER_ID','programs.PHONE_NO','programs.ADDRESS','programs.SOIL_ID','assign_suppliers.id','programs.id as programs_id')
            ->where('assign_suppliers.id',$id)->orderBy('assign_suppliers.id','desc')->first();
//dd($soil_info);
        $tester_info=tester::all();

        return view('Tester.assign_tester',compact('soil_info','tester_info'));;
    }

    public function tester_sample()
    {
        $soil_info=DB::table("programs")
            ->join("payments","programs.id","payments.farmer_id")
            ->join("assign_testers","assign_testers.invoice_id","programs.id")
            ->join("testers","testers.user_id","assign_testers.tester_name")
            ->select('payments.Payment_number','payments.test_name','programs.NAME','programs.FARMER_ID','programs.PHONE_NO','programs.ADDRESS','programs.SOIL_ID','assign_testers.id')
            ->where('assign_testers.tester_name',Auth::id())->orderBy('assign_testers.id','desc')->get();
//dd(Auth::id());
        return view('Tester.tester_view_sample',compact('soil_info'));
    }
    public function delete_tester($id)
    {
        $delete=tester::find($id);
        $delete->delete();
        return redirect('admin');
    }

}
