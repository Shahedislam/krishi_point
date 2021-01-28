<?php

namespace App\Http\Controllers;

use App\delivery_report;
use Illuminate\Http\Request;

class DeliveryReportController extends Controller
{
    //
    public function reg(Request $request)
    {
        $test=new delivery_report();
        $test->report_id=$request->report_id;
            $test->supplier_id=$request->sname;
            $test->save();
                return redirect('/sendreport');
    }

    }
