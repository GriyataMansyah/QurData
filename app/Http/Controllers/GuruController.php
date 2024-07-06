<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Guru;
use App\Models\Admin;
use App\Models\Murid;
use App\Models\Superadmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
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
        return view('Guru/dashboard', compact('Murid','Guru','Admin','Superadmin','Muridall','Guruall','Adminall','Superadminall'));
    }

    public function absensi()
    {
        $Muridall = Murid::all();
        return view('Guru/absensi', compact('Muridall'));
    }

    public function capaian()
    {
        $Muridall = Murid::all();
        return view('Guru/capaian', compact('Muridall'));
    }

    public function catatancapaian()
    {
        return view('Guru/catatancapaian');
    }

    public function datamurid()
    {
        $Muridall = Murid::all();
        return view('Guru/datamurid', compact('Muridall'));
    }

    public function setting()
    {
        $idAkun = Auth::id();
        $Gurume = Guru::where('id_akun', $idAkun)->first();
        dd($Gurume);
        return view('Guru/setting', ['guru' => $Gurume]);
    }

    public function Addmurid(Request $request)
    {
        // Validasi input
        $request->validate([
            'nik' => 'required|numeric|min:11',
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki - Laki,Perempuan',
            'no_hp' => 'required|numeric',
        ]);

        // Buat data murid baru
        $murid = new Murid();
        $murid->nik = $request->nik;
        $murid->nama = $request->nama;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->jenis_kelamin = $request->jenis_kelamin;
        $murid->no_hp = $request->no_hp;
        $murid->save();

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('guru/datamurid')->with('success', 'Data murid berhasil ditambahkan!');
    }

    public function Removemurid(Request $request)
    {
        $muridId = $request->input('murid_id');

        // Lakukan validasi atau proses penghapusan
        $murid = Murid::findOrFail($muridId);
        $murid->delete();

        // Redirect atau response lain setelah penghapusan berhasil
        return redirect()->route('guru/datamurid')->with('success', 'Murid berhasil dihapus');
    }
}
