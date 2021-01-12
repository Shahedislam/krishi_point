<?php

namespace App\Http\Controllers;

use App\operator;
use App\tester;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OperatorController extends Controller
{
    //
    public function reg(Request $request)
    {
        $worker=new User();
        $worker->name=$request->NAME;
        $worker->email=$request->Email;
        $worker->password=Hash::make('12345678');
        $worker->save();

        $test=new operator();
        $test->name= $request->NAME;
        $test->address= $request->ADDRESS;
        $test->user_id=$worker->id;
        $test->phone_no= $request->PHONE_NO;
        $test->email = $request->Email;
        $test->save();

        return redirect('/operator');

    }

    public function operator_info()
    {
        return view('local-operator.operator_form');
    }

    public function view_operator()
    {
        $operator_info=operator::all();
        return view('Administrator.view_operator',compact('operator_info'));
    }


    public function delete_operator($id)
    {
$delete=operator::find($id);
$delete->delete();
return redirect('admin');
    }
}
