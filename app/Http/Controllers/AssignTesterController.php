<?php

namespace App\Http\Controllers;
use App\assign_tester;

use Illuminate\Http\Request;

class AssignTesterController extends Controller
{
    //

    public function tester_view(Request $request)
    {
        $assign=new assign_tester();
        $assign->farmer_id=$request->program_id;
        $assign->tester_name=$request->test;
        $assign->save();
        return redirect('/soilview');
    }
}
