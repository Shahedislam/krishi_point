<?php

namespace App\Http\Controllers;

use App\assign_supplier;
use Illuminate\Http\Request;

class AssignSupplierController extends Controller
{

public function supplier_view(Request $request)
{
$assign=new assign_supplier();
$assign->farmer_id=$request->program_id;
$assign->supplier_name=$request->suppli;
$assign->save();
return redirect('/soilview');
}



}
