<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        //$title = "Pharmacy Register";
        return view('Auth.Register');
    }
}
