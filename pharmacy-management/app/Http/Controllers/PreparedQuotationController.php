<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PreparedQuotationController extends Controller
{
    public function index()
    {
        $data = DB::select('
        SELECT order_id, status, prescriptions.note, SUM(amount) AS amount
        FROM quaotations
        INNER JOIN prescriptions ON prescriptions.id = quaotations.order_id
        WHERE quaotations.user_id = ?
        GROUP BY order_id, status, prescriptions.note;
    ', [Auth::id()]);

        return view('user.prepared-quotation', compact('data'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $data = DB::table('quaotations')->where('order_id', $request->id)->update(array('status' => $request->status));

        return redirect('prepared-quotation');
    }
}
