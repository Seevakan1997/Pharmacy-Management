<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        //$title = "Pharmacy Register";
        return view('Auth.Register')->with('message', 'Pharmacy Register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users'],
            'mobile' => ['required', 'min:10'],
            'address' => 'required',
            'dob' => 'required',
            'password' => ['required', 'min:8', 'string', 'confirmed']
        ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile_no = $request->input('mobile');
        $user->address = $request->input('address');
        $user->password = Hash::make($request->input('password'));
        $user->dob = $request->input('dob');

        $user->save();

        Auth::login($user);

        return redirect('user-dashboard');
    }
}
