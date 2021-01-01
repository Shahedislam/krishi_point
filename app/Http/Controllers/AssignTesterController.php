<?php

namespace App\Http\Controllers;
use App\assign_supplier;
use App\assign_tester;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignTesterController extends Controller
{
    //

    public function tester_view(Request $request)
    {
        $assign = new assign_tester();
        $assign->invoice_id= $request->program_id;
        $assign->tester_name= $request->test;
        $assign->supplier_name =Auth::id();

            $assign->assign_date=$request->date;
        $assign->status=1;

        $assign->save();
        return redirect('/soilview');
    }


    public function delivery_status($id)
    {
        $delivery = assign_tester::find($id);
        $delivery->status = 2;
        $delivery->save();
        return view('Tester.assign_tester');
    }

}
