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
        $data =  DB::select('select order_id, status, prescriptions.note, SUM(amount) AS amount FROM quaotations INNER JOIN prescriptions ON prescriptions.id = quaotations.order_id where status=1 GROUP by(order_id);');
        return view('Admin.accept', compact('data'));
    }

    public function reject()
    {
        $data =  DB::select('select order_id, status, prescriptions.note, SUM(amount) AS amount FROM quaotations INNER JOIN prescriptions ON prescriptions.id = quaotations.order_id where status=2 GROUP by(order_id);');
        return view('Admin.reject', compact('data'));
    }

    public function pending()
    {
        $data =  DB::select('select order_id, status, prescriptions.note, SUM(amount) AS amount FROM quaotations INNER JOIN prescriptions ON prescriptions.id = quaotations.order_id where status = 0 GROUP by(order_id);');

        // dd($data);

        return view('Admin.pending', compact('data'));
    }
}
