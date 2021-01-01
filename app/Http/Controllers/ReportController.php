<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    //
    public function make_report()
    {

        //$soil_info=DB::table("programs")->join("payments","programs.id","payments.farmer_id")->where('programs.id')->first();
//dd($soil_info);

        return view('Tester.soil_report');
    }
}
