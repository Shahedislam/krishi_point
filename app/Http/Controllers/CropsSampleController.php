<?php

namespace App\Http\Controllers;

use App\crops_sample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CropsSampleController extends Controller
{
    //
    public function crops_sample(Request $request)
    {
       $crops=new crops_sample();
        $crops->NAME = $request->NAME;
        $crops->FARMER_ID= $request->FARMER_ID;
        $crops->PHONE_NO = $request->PHONE_NO;
        $crops->ADDRESS= $request->ADDRESS;
        $crops->crops_id = $request->crops_id;
        $crops->crops_Name = $request->crops_Name;
        $crops->SUBMISSION_DATE= $request->sample;
        $crops->DELIVERY_DATE= $request->delivery;
        $crops->save();
        $crops_id=$crops->id;
        return view('local-operator.crops_payment',compact('crops_id'));

    }

    public function crops_details()
    {

        $crops_info=DB::table("crops_samples")->join("payments","crops_samples.id","payments.farmer_id")->get();
        return view("local-operator.crops_view",compact('crops_info'));

    }

    public function crops_view()
    {
        return view('local-operator.crops_info');
    }
}
