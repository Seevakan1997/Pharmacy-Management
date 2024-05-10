<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreparedQuotationController extends Controller
{
    public function index()
    {
        return view('user.prepared-quotation');
    }
}
