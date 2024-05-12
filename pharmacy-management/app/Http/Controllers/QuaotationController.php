<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Quaotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // DB::table('prescriptions')->where('id', $request->id)->update(array('confirm' => $request->order));


        $data->save();

        return redirect()->back();
    }
}
