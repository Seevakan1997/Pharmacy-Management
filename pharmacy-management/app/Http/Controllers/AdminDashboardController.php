<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data =  DB::select('select order_id, status, prescriptions.note, SUM(amount) AS amount FROM quaotations INNER JOIN prescriptions ON prescriptions.id = quaotations.order_id where status=0 GROUP by(order_id);');
        return view('Admin.pending', compact('data'));
    }
}
