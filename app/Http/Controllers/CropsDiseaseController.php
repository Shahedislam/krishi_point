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
        $disease->disease_name= $request->reasons;
        $disease->remedy= $request->remedy;
        $disease->save();


        return view('local-operator.disease_info');

    }

}
