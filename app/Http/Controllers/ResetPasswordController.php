<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    /**
     * Menampilkan halaman lupa password
     */
    public function showForgotPasswordForm()
    {
        return view('forgot-password');
    }


    /**
     * Mengirim link reset password ke email
     */
    public function sendResetLinkEmail(Request $request)
{
    // Validasi email
    $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    // Mengirimkan link reset password
    $status = Password::sendResetLink(
        $request->only('email')
    );

    // Memeriksa status pengiriman
    if ($status == Password::RESET_LINK_SENT) {
        return back()->with('status', 'Link reset password telah dikirim ke email Anda.');
    }

    return back()->withErrors(['email' => 'Gagal mengirimkan link reset password.']);
}


    /**
     * Menampilkan form reset password dengan token
     */
    public function formResetPassword(Request $request)
{
    $token = $request->query('token'); // Perbaikan cara mendapatkan token
    return view('reset-password', compact('token'));
}


    /**
     * Menangani proses reset password
     */
    public function submitResetPassword(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|confirmed|min:8',
        'token' => 'required',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) { // Perbaikan callback
            $user->password = Hash::make($password);
            $user->save();
        }
    );

    if ($status == Password::PASSWORD_RESET) {
        return redirect('/login')->with('status', 'Password Anda telah direset, silakan login.');
    }

    return back()->withErrors(['email' => 'Gagal mereset password.']);
}

}
