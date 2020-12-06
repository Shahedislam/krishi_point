<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class invoice extends Controller
{
    //
    public function invoice(Request $request)
    {
        $value = $request->session()->get('soil_id');
        $soil_info=DB::table("programs")->join("payments","programs.id","payments.farmer_id")->where('programs.id',$value)->first();



        return view('local-operator.invoice',compact('soil_info'));
    }


    public function supplier_show()
    {



    }


}
