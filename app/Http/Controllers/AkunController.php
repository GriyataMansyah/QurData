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

}
