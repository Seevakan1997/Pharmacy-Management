<?php

namespace App\Http\Controllers;

use App\Models\Quaotation;
use App\Models\User;
use App\Notifications\AcceptQuotationNotification;
use App\Notifications\RejectQuotationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PreparedQuotationController extends Controller
{
    public function index()
    {
        $data = DB::select('
        SELECT order_id, status, prescriptions.note, SUM(total) AS amount
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

        $quotation = Quaotation::where('order_id', $request->id)->first();


        $admins = User::where('role', 1)->get();

        foreach ($admins as $admin) {
            if ($request->status == 1) {
                Notification::send($admin, new AcceptQuotationNotification($quotation));
            } elseif ($request->status == 2) {
                Notification::send($admin, new RejectQuotationNotification($quotation));
            }
        }
        $notifications = auth()->user()->notifications;
        return redirect('prepared-quotation');
    }



    public function clearNotifications()
    {

        Auth::user()->notifications()->delete();
        return redirect()->back()->with('success', 'All notifications have been cleared.');
    }
}
