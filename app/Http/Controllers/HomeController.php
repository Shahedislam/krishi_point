<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
$user_type=Auth::user()->user_type;
if($user_type==1)
{
    return redirect('admin');
}
        if($user_type==2)
        {
            return redirect('index-operator');
        }

        if($user_type==3)
        {
            return redirect('homepage');
        }
        if($user_type==4)
        {
            return redirect('testerhome');
        }
        if($user_type==5)
        {
            return redirect('crops');
        }
    }
}
