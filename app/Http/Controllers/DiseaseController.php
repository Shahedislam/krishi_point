<?php

namespace App\Http\Controllers;
use App\disease;

use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    //
    public function disease_sample(Request $request)
    {
        $disease=new disease();
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
        //$disease_info=disease::where('id',$disease->id)->first();

        return redirect('/crops_report/'.$disease->id);

    }

    public function disease_view($id)
    {
        $result=disease::find($id);

        return view('local-operator.disease_report',compact('result'));
    }

}
