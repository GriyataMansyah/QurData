<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class AkunController extends Controller
{
    public function index()
    {
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        // Otentikasi pengguna
        if (Auth::attempt($credentials)) {
            $role = Auth::user()->role;
    
            switch ($role) {
                case 'superadmin':
                    return redirect()->intended('dashboard/superadmin');
                case 'admin':
                    return redirect()->intended('dashboard/admin');
                case 'guru':
                    return redirect()->intended('dashboard/Guru');
                default:
                    return redirect()->intended('/');
            }
        }
    
        // Redirect kembali ke halaman login dengan pesan error
    return redirect()->route('login')->with('gagal', 'Username atau password salah');
    }
}
