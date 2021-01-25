<?php

namespace App\Http\Controllers;

use App\manager;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    //

    public function reg(Request $request)
    {
        $worker=new User();
        $worker->name=$request->NAME;
        $worker->email=$request->Email;
        $worker->user_type=5;
        $worker->password=Hash::make('12345678');
        $worker->save();

        $man=new manager();
        $man->name= $request->NAME;
        $man->address= $request->ADDRESS;
        $man->user_id=$worker->id;
        $man->phone_no=$request->PHONE_NO;
        $man->email = $request->Email;
        $man->save();

        return redirect('/crops_view');

    }
    public function manager_info()
    {
        return view('local-operator.manager_form');
    }


    public function assign_manager($id)
    {

        $crops_info=DB::table("crops_samples")
            ->join("payments","crops_samples.id","payments.farmer_id")
            ->select("crops_samples.NAME","crops_samples.FARMER_ID","crops_samples.PHONE_NO","crops_samples.ADDRESS","crops_samples.CROPS_NAME","payments.Payment_number","payments.test_name","payments.farmer_id","crops_samples.CROPS_ID")
            ->where ('payments.id',$id)->first();
        $manager_info=manager::all();

        return view('local-operator.manager_view',compact('crops_info','manager_info'));
    }

    public function farmer_sample()
    {
        $crops_info=DB::table("crops_samples")->join("payments","crops_samples.id","payments.farmer_id")->join("assign_managers","assign_managers.farmer_id","payments.id")->join("managers","managers.user_id","assign_managers.manager_name")->where('assign_managers.manager_name',Auth::id())->orderBy('assign_managers.id','desc')->first();

        return view('local-operator.manager_view_sample',compact('crops_info'));
    }



    public function crops_report($id)
    {

        $crops_info=DB::table("crops_samples")
            ->join("payments","crops_samples.id","payments.farmer_id")
            ->join("assign_managers","assign_managers.invoice_id","crops_samples.id")
            ->join("managers","managers.user_id","assign_managers.manager_name")
            ->select('crops_samples.NAME','crops_samples.FARMER_ID','crops_samples.CROPS_ID','crops_samples.ADDRESS','crops_samples.PHONE_NO','assign_managers.invoice_id','assign_managers.id')
            ->where('assign_managers.manager_name',Auth::id())
            ->where ('assign_managers.id',$id)
            ->orderBy('assign_managers.id','desc')->first();

        return view('local-operator.disease_info',compact('crops_info'));
    }


    public function view_manager()
    {
        $manager_info=manager::all();
        return view('Administrator.view_manager',compact('manager_info'));
    }

    public function delete_manager($id)
    {
        $delete=manager::find($id);
        $delete->delete();
        return redirect('admin');
    }

    public  function agri_mainpage()
    {
        return view('Agricuture-manager.Manager_homepage');
    }


    }
