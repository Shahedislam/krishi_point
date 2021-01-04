<?php

namespace App\Http\Controllers;

use App\produce_result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    //
    public function make_result(Request $request)
    {
        $result =new produce_result();
        $result->labtest_id = $request->labtest_id;
        $result->Phs= $request->Phs;
        $result->phosphorus = $request->phosphorus;
        $result->potassium= $request->potassium;
        $result->calcium = $request->calcium;
        $result->organic_matter = $request->organic_matter;
        $result->cec = $request->cec;
        $result->nitrogen= $request->nitrogen;
        $result->phosphorus_amount = $request->phosphorus_amount;
        $result->potash= $request->potash;
        $result->zinc = $request->zinc;
        $result->lime= $request->lime;
        $result->comment1= $request->comment1;
        $result->comment2= $request->comment2;


        $result->save();

        return view("Tester.soil_report");

    }

    public  function  result_form()
    {
        return view('Tester.make_result');
    }
}
