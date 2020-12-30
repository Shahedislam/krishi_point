<?php

namespace App\Http\Controllers;
use App\supplier;
use App\tester;

use App\manager;
use App\User;
use Illuminate\Http\Request;
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

        $soil_info=DB::table("programs")->join("payments","programs.id","payments.farmer_id")->where ('payments.id',$id)->first();
        $tester_info=tester::all();

        return view('Tester.assign_tester',compact('soil_info','tester_info'));;
    }
}
