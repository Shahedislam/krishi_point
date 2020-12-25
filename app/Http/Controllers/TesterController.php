<?php

namespace App\Http\Controllers;
use App\tester;

use App\manager;
use App\User;
use Illuminate\Http\Request;
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

        return redirect('/sampleview');

    }

    public function tester_info()
    {
        return view('tester.tester_form');
    }
}
