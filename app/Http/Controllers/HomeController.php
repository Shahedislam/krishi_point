<?php

namespace App\Http\Controllers;

use App\operator;
use App\supplier;
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

    return redirect('dashboard');
}
        if($user_type==2)
        {
            return redirect('dashlocal');
        }

        if($user_type==3)
        {
            return redirect('sampleview');
        }
        if($user_type==4)
        {
            return redirect('testview');
        }
        if($user_type==5)
        {
            return redirect('sample_crops');
        }
    }
}
