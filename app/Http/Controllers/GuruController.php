<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Guru;
use App\Models\Admin;
use App\Models\Murid;
use App\Models\Capaian;
use App\Models\Superadmin;
use App\Models\Datacapaian;
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
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Gurume = Guru::where('id_akun', $IdAkun)->first();
        $Muridall = Murid::all();
        $capaians = Datacapaian::all();
        return view('Guru/capaian', compact('Muridall','Gurume','capaians'));
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
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Gurume = Guru::where('id_akun', $IdAkun)->first();
        return view('Guru/setting',  compact('Gurume','Akun'));
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

        return redirect()->route('guru/datamurid')->with('berhasil', 'Data murid berhasil ditambahkan!');
    }

    public function Removemurid(Request $request)
    {
        $muridId = $request->input('murid_id');

        $murid = Murid::findOrFail($muridId);
        $murid->delete();

        return redirect()->route('guru/datamurid')->with('success', 'Murid berhasil dihapus');
    }

    public function gantiidentitas(Request $request)
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
        $Guru = Guru::where('id_akun', $akun->id)->first();
        $akun->username = $request->input('username');
    
        if ($request->filled('new_password')) {
            $akun->password = bcrypt($request->input('new_password'));
        }
    
        $Guru->nama = $request->input('nama');
        $Guru->tanggal_lahir = $request->input('tgl_lahir');
    
        $akun->save();
        $Guru->save();
    
        return redirect()->route('guru/setting')->with('success', 'Data akun berhasil disimpan!');
    }
    

    public function AddCapaian(Request $request)
    {

    $request->validate([
        'id' => 'required|exists:Guru,id',
        'capaian' => 'required|array',
        'capaian.*' => 'required|string|max:255'
    ]);

        $gurumeId = $request->id;

        foreach ($request->capaian as $capaian) {
            Datacapaian::create([
                'nama' => $capaian,
                'guru_id' => $gurumeId
            ]);
        }

        return redirect()->route('guru/capaian')->with('Succes', 'Capaian berhasil ditambahkan.'); 
    }


    public function Removecapaian($id)
    {
    $capaian = Datacapaian::find($id);
    $capaian->delete();

    return redirect()->route('guru/capaian')->with('Succes', 'Capaian berhasil dihapus.');
    }

    
}
