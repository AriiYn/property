<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // middleware guest pada halaman login agar user yang sudah login tidak bisa mengaksesnya lagi
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            session(['user_name' => Auth::user()->name]); // Menyimpan nama penggun
            // Redirect ke dashboard setelah login
            return redirect()->intended('dashboard');
        }

        // Jika gagal, kembali ke form login dengan error
        return back()->withErrors(['email' => 'Login gagal. Silakan periksa kembali email dan password Anda.']);
    }

    // Logout
    public function logout()
    {
        // Menghapus data dari session saat logout
        session()->forget('user_name');

        Auth::logout();
        return redirect('login')->with('status', 'Logout berhasil.');
    }
}
