<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostomerController extends Controller
{
    public function index()
    {
        return view('Admin.customers');
    }
}