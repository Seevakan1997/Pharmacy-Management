<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadedPrescriptionsController extends Controller
{
    public function index()
    {

        return view('Admin.uploaded-prescriptions');
    }
}
