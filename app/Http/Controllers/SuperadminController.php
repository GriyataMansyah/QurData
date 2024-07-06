<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Guru;
use App\Models\Admin;
use App\Models\Murid;
use App\Models\Superadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperadminController extends Controller
{
    public function dashboard()
    {
        $Murid = Murid::count();
        $Guru = Guru::count();
        $Admin = Admin::count();
        $Superadmin = Superadmin::count();
        $Muridall = Murid::all();
        $Guruall = Guru::all();
        $Adminall = Admin::all();
        $Superadminall = Superadmin::all();
        return view('Superadmin/dashboard', compact('Murid','Guru','Admin','Superadmin','Muridall','Guruall','Adminall','Superadminall'));
    }

    public function dataadmin()
    {
        $Adminall = Admin::all();
        return view('Superadmin/dataadmin', compact('Adminall'));
    }

    public function dataguru()
    {
        $Guruall = Guru::all();
        return view('Superadmin/dataguru', compact('Guruall'));
    }

    public function datamurid()
    {
        $Muridall = Murid::all();
        return view('Superadmin/datamurid', compact('Muridall'));
    }

    public function setting()
    {
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Gurume = Superadmin::where('id_akun', $IdAkun)->first();
        return view('Superadmin/setting', compact('Akun','Gurume'));
    }

    public function gantiidentitassuperadmin(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'username' => 'required',
            'new_password' => 'nullable',
            'confirm_password' => 'nullable',
        ]);
    
        // Simpan data ke dalam database
        $akun = Akun::find($request->input('id'));
        $Admin = Superadmin::where('id_akun', $akun->id)->first();
        $akun->username = $request->input('username');
    
        if ($request->filled('new_password')) {
            $akun->password = bcrypt($request->input('new_password'));
        }
    
        $Admin->nama = $request->input('nama');
        $Admin->tanggal_lahir = $request->input('tgl_lahir');
    
        $akun->save();
        $Admin->save();
    
        return redirect()->route('superadmin/setting')->with('success', 'Data akun berhasil disimpan!');
    }
}
