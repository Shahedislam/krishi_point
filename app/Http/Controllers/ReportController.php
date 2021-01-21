<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    //
    public function make_report($id)
    {
        //$soil_info=DB::table("programs")->join("payments","programs.id","payments.farmer_id")->where('programs.id')->first();
//dd($soil_info);

        $soil_info=DB::table("programs")
            ->join("payments","programs.id","payments.farmer_id")
            ->join("assign_testers","assign_testers.invoice_id","programs.id")
            ->join("testers","testers.user_id","assign_testers.tester_name")
            ->select('programs.NAME','programs.FARMER_ID','programs.SOIL_ID','assign_testers.id')
            ->where('assign_testers.tester_name',Auth::id())
            ->where ('assign_testers.id',$id)
            ->orderBy('assign_testers.id','desc')->first();

        return view('Tester.make_result',compact('soil_info'));
    }
}
