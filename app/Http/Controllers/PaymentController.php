<?php

namespace App\Http\Controllers;

use App\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function payment()
    {
        //$payment=new payment();
        //$payment->Payment_number=$request->Payment_Number;
       // $payment->Test_Name=$request->Test_Name;
           // $payment->price=$request->price;
                //$payment->test_count=$request->test_count;
            //$payment->total_price=$request->total_price;
        return view('local-operator.payment');
    }
    public function payment_process(Request $request)
    {
        if($request->soil_id!=null){
            $payment=new payment();
            $payment->Payment_number=$request->Payment_Number;
            $payment->Test_Name=$request->Test_Name;
            $payment->price=$request->price;
            $payment->test_count=$request->test_count;
            $payment->total_price=$request->total_price;
            $payment->farmer_id=$request->soil_id;

            $payment->save();
            $request->session()->put('soil_id',$request->soil_id);
            return redirect('/invoice');

        }
        else{
            return redirect('local-operator.soil_sample');
        }

    }



}
