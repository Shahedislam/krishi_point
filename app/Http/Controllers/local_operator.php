<?php

namespace App\Http\Controllers;

use App\tester;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class local_operator extends Controller
{
    //
    public function index()
    {
        return view("local-operator.soil_sample");
    }

}
