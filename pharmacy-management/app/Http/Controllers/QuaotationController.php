<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Quaotation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\QuotationNotification;

class QuaotationController extends Controller
{
    public function index($id)
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'drug_name' => 'required',
            'quanity' => 'required',
        ]);

        $drugId = $request->input('drug_name');
        $medicine = Medicine::findOrFail($drugId);
        $drugPrice = $medicine->amount;
        // dd($drugPrice);

        $data = new Quaotation();

        $que = $request->input('quanity');
        // $price = $request->input('drug_price');

        $data->drugs = $request->input('drug_name');
        $data->quanity = $request->input('quanity');
        $data->amount = $drugPrice;
        $total = $que * $drugPrice;
        $data->total = $total;

        $data->order_id = $request->input('prescription_id');

        $data->user_id = $request->input('user_id');

        DB::table('prescriptions')->where('id', $request->id)->update(array('confirm' => $request->order));

        $data->save();



        return redirect()->back();
    }

    public function sendQuotation(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'prescription_id' => 'required',
        ]);

        $userId = $request->input('user_id');
        $orderId = $request->input('prescription_id');

        $quotations = Quaotation::with('medicine')
            ->where('user_id', $userId)
            ->where('order_id', $orderId)
            ->get();

        $quotationDetails = [];
        foreach ($quotations as $quotation) {
            $quotationDetails[] = [
                'drugs' => $quotation->medicine->drugs,
                'quanity' => $quotation->quanity,
                'total' => $quotation->total,
            ];
        }

        $admin = Auth::user();

        $user = User::findOrFail($request->input('user_id'));

        Notification::send($user, new QuotationNotification($admin, $user, $quotationDetails));

        return redirect()->back()->with('success', 'Quotation email sent successfully!');
    }
}
