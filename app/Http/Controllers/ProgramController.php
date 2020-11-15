<?php

namespace App\Http\Controllers;
use App\program;

use Illuminate\Http\Request;

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
        return redirect("/home");

    }
    public function view()
    {
        return view('local-operator.soil_sample');
    }

}
