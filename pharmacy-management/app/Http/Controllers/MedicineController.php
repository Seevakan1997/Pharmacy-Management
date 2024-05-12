<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        $medicine = Medicine::paginate(5);
        return view('Admin.medicine-list', compact('medicine'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'drugName' => 'required',
            'price' => 'required',
        ]);

        $medicine = new Medicine();

        $medicine->drugs = $request->input('drugName');
        $medicine->amount = $request->input('price');
        $medicine->discount = $request->input('discount');

        $medicine->save();

        return redirect('medicine-list')->with('message', 'New Medicine Successfully Addedd');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'drugName' => 'required',
            'price' => 'required',
        ]);

        $medicine = Medicine::find($id);

        if (!$medicine) {
            return redirect()->back()->with('error', 'Medicine not found');
        }

        $medicine->drugs = $request->input('drugName');
        $medicine->amount = $request->input('price');
        $medicine->discount = $request->input('discount');

        $medicine->save();

        return redirect('medicine-list')->with('message', 'Medicine Successfully Updated');
    }

    public function delete($id)
    {

        $medicineDelete = Medicine::find($id);
        $medicineDelete->delete();

        return redirect()->back()->with('message', 'Medicine Successfully deleted');
    }

    public function findPrice(Request $request)
    {
        $data = Medicine::select('amount')->where('id', $request->id)->first();

        return response()->json($data);
    }
}
