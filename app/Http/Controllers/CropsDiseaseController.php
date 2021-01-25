<?php

namespace App\Http\Controllers;

use App\crops_disease;
use Illuminate\Http\Request;

class CropsDiseaseController extends Controller
{
    //
    public function disease_form()
    {
        return view('local-operator.disease_info');
    }

    public function disease_sample(Request $request)
    {
        $disease=new crops_disease();
        $disease->crops_name= $request->cname;
        $disease->test_id= $request->test_id;
        $disease->invoice_id= $request->invoice_id;
        $disease->crops_id= $request->crops_id;
        $disease->crops_name= $request->crops_name;
        $disease->farmer_id= $request->farmer_id;
        $disease->farmer_name=$request->farmer_name;
        $disease->address=$request->address;
        $disease->dname=$request->dname;
        $disease->phone_no=$request->phone_no;
        $disease->crops_syptoms= $request->crops_syptoms;
        $disease->remedy= $request->remedy;
        $disease->date= $request->date;
        $disease->save();
        $disease_info=crops_disease::where('id',$disease->id)->first();

        return view('local-operator.disease_report',compact('disease_info'));

    }

    public function disease_view()
    {

    }

}
