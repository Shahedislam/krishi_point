<?php

namespace App\Http\Controllers;
use App\program;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProgramController extends Controller
{

    public function save(Request $request)
    {
        $soil =new program();
        $soil->NAME = $request->NAME;
        $soil->FARMER_ID= $request->FARMER_ID;
        $soil->PHONE_NO = $request->PHONE_NO;
        $soil->ADDRESS= $request->ADDRESS;
        $soil->SOIL_ID = $request->SOIL_ID;
        $soil->delivery = $request-> delivery;
        $soil->save();
        $soil_id=$soil->id;
        return view("local-operator.payment",compact('soil_id'));

    }
    public function view()
    {
        return view('local-operator.soil_sample');
    }

    public function soil_view()
    {
        $soil_info=DB::table("programs")->join("payments","programs.id","payments.farmer_id")->get();
        return view("local-operator.soil_view",compact('soil_info'));
    }

    public function show_admin()
    {
        return view('Administrator.admin');
    }


    public function soil_sample()
    {
        $soil_info=DB::table("programs")->join("payments","programs.id","payments.farmer_id")->get();

        return view('Administrator.show_soil_sample',compact('soil_info'));
    }
    public function crops_sample()
    {
        $crops_info=DB::table("crops_samples")->join("payments","crops_samples.id","payments.farmer_id")->get();
        return view('Administrator.show_crops_sample',compact('crops_info'));
    }

}
