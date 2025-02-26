<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function showRegister()
        {
            return view('registration');
        }

        public function register(Request $request)
        {
            $request->validate([
                'name' => 'required|max:255',
                'email' =>'required|email|unique:users,email',
                'password' => 'required|confirmed|min:8',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('login')->with('success', 'Registration successful!');
        }
}
