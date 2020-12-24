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
        $disease->crops_syptoms_1=$request->crops_syptoms_1;
        $disease->crops_syptoms_2=$request->crops_syptoms_2;
        $disease->crops_syptoms_3=$request->crops_syptoms_3;
        $disease->crops_syptoms_4=$request->crops_syptoms_4;
        $disease->crops_syptoms_5=$request->crops_syptoms_5;
        $disease->remedy_1= $request->remedy_1;
        $disease->remedy_2= $request->remedy_2;
        $disease->remedy_3= $request->remedy_3;
        $disease->save();
        $disease_info=crops_disease::where('id',$disease->id)->first();

        return view('local-operator.disease_report',compact('disease_info'));

    }

    public function disease_view()
    {

    }

}
