<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // ✅ MENAMPILKAN HALAMAN LOGIN (GET)
    public function index()
    {
        return view('login');
    }

    // ✅ PROSES LOGIN (POST)
    public function login(Request $req)
    {
        $credential = $req->only('username', 'password');

        if (Auth::attempt($credential)) {
            // cek role
            if (Auth::user()->role === 'admin') {
                return redirect('/admin');
            } else {
                return redirect('/kasir');
            }
        }

        return redirect('/login')->with('error', 'Username atau password salah');
    }
}
