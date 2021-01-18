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

    public function crops()
    {
        return view('local-operator.crops_payment');
    }
    public function payment_process(Request $request)
    {
        if($request->soil_id!=null){
            $payment=new payment();
            $payment->Payment_number=$request->Payment_Number;
            $payment->test_name=$request->test_name;
            $payment->price=$request->price;
            $payment->test_count=$request->test_count;
            $payment->total_price=$request->total_price;
            $payment->farmer_id=$request->soil_id;
            $payment->program_id_fk=$request->soil_id;
            $payment->save();
            $request->session()->put('soil_id',$request->soil_id);
            return redirect('/invoice');

        }
        else{
            return redirect('local-operator.soil_sample');
        }

    }
    public function payment_crops(Request $request)
    {
        if($request->crops_id!=null){
            $payment=new payment();
            $payment->Payment_number=$request->Payment_Number;
            $payment->test_name=$request->test_name;
            $payment->price=$request->price;
            $payment->test_count=$request->test_count;
            $payment->total_price=$request->total_price;
            $payment->farmer_id=$request->crops_id;

            $payment->save();
            $request->session()->put('crops_id',$request->crops_id);
            return redirect('/crvoice');

        }
        else{
            return redirect('local-operator.crops_sample');
        }

    }


}
