<?php

namespace App\Http\Controllers;

use App\assign_manager;
use Illuminate\Http\Request;

class AssignManagerController extends Controller
{
    //
    public function manager_view(Request $request)
    {
        $assign=new assign_manager();
        $assign->farmer_id=$request->man_id;
        $assign->manager_name=$request->man;
        $assign->save();
        return redirect('/crops_view');
    }

    public function manager_show()
    {

        return view('local-operator.manager_view');

    }

}
