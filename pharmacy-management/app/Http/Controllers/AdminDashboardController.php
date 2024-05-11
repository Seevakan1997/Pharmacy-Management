<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('Admin.admin-dashboard');
    }

    public function accept()
    {
        return view('Admin.accept');
    }

    public function reject()
    {
        return view('Admin.reject');
    }

    public function pending()
    {
        return view('Admin.pending');
    }
}
