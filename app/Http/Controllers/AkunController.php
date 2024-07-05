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
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Otentikasi pengguna
        if (Auth::attempt($credentials)) {
            $role = Auth::user()->role;

            switch ($role) {
                case 'superadmin':
                    return redirect()->intended('dashboard/superadmin');
                    break;
                case 'admin':
                    return redirect()->intended('dashboard/admin');
                    break;
                case 'guru':
                    return redirect()->intended('dashboard/Guru');
                    break;
                default:
                    return redirect()->intended('/');
                    break;
            }
        }

        return back()->withErrors([
            'username' => 'Username atau password salah',
        ]);
    }

    public function logout(Request $request)
    {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('Login');
    }
}
