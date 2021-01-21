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

    public function invoice_details()
    {

$invoice=DB::table("programs")->join("payments","programs.id","payments.program_id_fk")->get();
return view('Administrator.invoice_all_view',compact('invoice'));

    }

    public function crops_invoice(Request $request)
    {
        $value = $request->session()->get('crops_id');
        $crops_info=DB::table("crops_samples")->join("payments","crops_samples.id","payments.farmer_id")->where('crops_samples.id',$value)->first();

        return view('local-operator.crops_invoice',compact('crops_info'));
    }


    public function supplier_show()
    {

      return view('local-operator.supplier_view');

    }


}
