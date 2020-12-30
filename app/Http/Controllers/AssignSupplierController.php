<?php

namespace App\Http\Controllers;

use App\assign_supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AssignSupplierController extends Controller
{

public function supplier_view(Request $request)
{
$assign=new assign_supplier();
$assign->farmer_id=$request->program_id;
$assign->supplier_name=$request->suppli;
$assign->status=1;
$assign->save();
return redirect('/soilview');
}





public function delivery_status($id)
{
$delivery=assign_supplier::find($id);
$delivery->status=2;
$delivery->save();
return view('Tester.assign_tester');
}



}
