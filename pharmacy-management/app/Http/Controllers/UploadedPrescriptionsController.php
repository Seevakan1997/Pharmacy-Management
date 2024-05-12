<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Prescription;
use App\Models\Quaotation;
use Illuminate\Http\Request;

class UploadedPrescriptionsController extends Controller
{
    public function index($id)
    {
        $drug = Medicine::all();
        $user_drugs = Prescription::find($id);
        $data = Quaotation::select('*')->where('order_id', $id)->get();
        return view('Admin.upload-quotation', compact('drug', 'user_drugs', 'data'));
    }

    public function Details($id)
    {
        $drug = Medicine::all();
        $user_drugs = Prescription::find($id);
        $data = Quaotation::select('*')->where('order_id', $id)->get();
        return view('user.Quotation-details', compact('drug', 'user_drugs', 'data'));
    }
}
