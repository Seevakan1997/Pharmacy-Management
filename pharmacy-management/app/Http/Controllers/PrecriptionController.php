<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrecriptionController extends Controller
{
    public function index()
    {
        $user = Prescription::where('user_id', Auth::id())->get();

        return view('user.prescription-history', compact('user'));
    }

    public function show()
    {
        $precription = Prescription::all();

        return view('Admin.prescription-list', compact('precription'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'note' => 'required',
            'address' => 'required',
            'image1' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'image3' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'image4' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'image5' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ]);

        $image1 = time() . rand(1, 1000) . '.' . $request->image1->extension();
        $request->image1->move(public_path('images'), $image1);

        $image2 = time() . rand(1, 1000) . '.' . $request->image2->extension();
        $request->image2->move(public_path('images'), $image2);

        $image3 = time() . rand(1, 1000) . '.' . $request->image3->extension();
        $request->image3->move(public_path('images'), $image3);

        $image4 = time() . rand(1, 1000) . '.' . $request->image4->extension();
        $request->image4->move(public_path('images'), $image4);

        $image5 = time() . rand(1, 1000) . '.' . $request->image5->extension();
        $request->image5->move(public_path('images'), $image5);

        $user = new Prescription();

        $user->note = $request->input('note');
        $user->address = $request->input('address');
        $user->user_id = $request->input('user_id');
        $user->image1 = "images/" . $image1;
        $user->image2 = "images/" . $image2;
        $user->image3 = "images/" . $image3;
        $user->image4 = "images/" . $image4;
        $user->image5 = "images/" . $image5;

        $user->save();

        return redirect('prescription-history');
    }
}
