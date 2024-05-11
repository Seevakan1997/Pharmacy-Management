<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrecriptionController extends Controller
{
    public function index()
    {
        return view('user.prescription-history');
    }

    public function show()
    {
        return view('Admin.prescription-list');
    }
}
