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
        $result->invoice_id = $request->invoice_id;
        $result->soil_id= $request->soil_id;
        $result->farmer_id= $request->farmer_id;
        $result->farmer_name= $request->farmer_name;
        $result->address= $request->address;
        $result->phone_no= $request->phone_no;
        $result->Phs= $request->Phs;
        $result->phosphorus = $request->phosphorus;
        $result->potassium= $request->potassium;
        $result->calcium = $request->calcium;
        $result->organic_matter = $request->organic_matter;
        $result->cec = $request->cec;
        $result->nitrogen= $request->nitrogen;
        $result->potash= $request->potash;
        $result->acidity= $request->acidity;
        $result->sulfer= $request->sulfer;
        $result->zinc = $request->zinc;
        $result->lime= $request->lime;
        $result->comment= $request->comment;
        $result->result= $request->result;
        $result->date= $request->date;


        $result->save();

        return redirect('/make_result/'.$result->id);

    }

    public  function  result_form($id)
    {
        $result=produce_result::find($id);

        return view('Tester.soil_report',compact('result'));
    }
}
