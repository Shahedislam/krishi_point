<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class local_operator extends Controller
{
    //
    public function index()
    {
        return view("local-operator.soil_sample");
    }
}
