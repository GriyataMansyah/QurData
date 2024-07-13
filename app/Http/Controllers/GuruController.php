<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Guru;
use App\Models\Admin;
use App\Models\Murid;
use App\Models\Absensi;
use App\Models\Capaian;
use App\Models\Superadmin;
use App\Models\Datacapaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function absensi(Request $request)
    {
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Gurume = Guru::where('id_akun', $IdAkun)->first();
        $muridAll = Murid::all();
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');
        
        $absensi = Absensi::where('bulan', $bulan)
                          ->where('tahun', $tahun)
                          ->get();

        $minggu1Kosong = $absensi->filter(function ($item) {
            return $item->minggu1 === null || $item->minggu1 === '';
        })->isEmpty();

        $minggu2Kosong = $absensi->filter(function ($item) {
            return $item->minggu2 === null || $item->minggu2 === '';
        })->isEmpty();

        $minggu3Kosong = $absensi->filter(function ($item) {
            return $item->minggu3 === null || $item->minggu3 === '';
        })->isEmpty();

        $minggu4Kosong = $absensi->filter(function ($item) {
            return $item->minggu4 === null || $item->minggu4 === '';
        })->isEmpty();

        return view('Guru/absensi', compact('muridAll','Gurume','minggu1Kosong','minggu2Kosong','minggu3Kosong','minggu4Kosong','bulan','tahun'));
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

    public function catatancapaian($id)
    {
        $Datacapaian = Datacapaian::all();
        $Murid = Murid::find($id);
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Capaian = Capaian::where('id_murid', $id)->get();
        $hasCapaian = DB::table('Capaian')
        ->where('id_murid', $id)
        ->get();

        return view('Guru.catatancapaian', compact('Datacapaian', 'Murid','Akun','hasCapaian'));
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

    public function output()
    {
        return view('Guru/output');
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

        return redirect()->route('guru/capaian')->with('berhasil', 'Capaian berhasil ditambahkan.'); 
    }


    public function Removecapaian($id)
    {
    $capaian = Datacapaian::find($id);
    $capaian->delete();

    return redirect()->route('guru/capaian')->with('berhasil', 'Capaian berhasil dihapus.');
    }

    public function Addcatatan(Request $request)
{
    $validatedData = $request->validate([
        'data.*.nama_indikator' => 'required|string|max:255',
        'data.*.status' => 'required|string|max:255',
        'data.*.keterangan' => 'nullable|string',
        'id_murid' => 'required|exists:Murid,id',
        'id_guru' => 'required|exists:Guru,id',
    ]);

    foreach ($validatedData['data'] as $data) {
        Capaian::create([
            'nama_indikator' => $data['nama_indikator'],
            'status' => $data['status'],
            'keterangan' => $data['keterangan'],
            'id_murid' => $validatedData['id_murid'],  
            'id_guru' => $validatedData['id_guru'],   
        ]);
    }

    return redirect()->route('guru/capaian')->with('berhasil', 'Catatan berhasil disimpan');
}

    public function hapusSemuaCapaian()
{
    // Hapus semua data Capaian
    Datacapaian::truncate();

    return redirect()->back()->with('berhasil', 'Semua data Capaian telah dihapus.');
}


    public function hapusCapaianMurid($id)
    {
        Capaian::where('id_murid', $id)->delete();

        return redirect()->route('guru/capaian')->with('berhasil', 'Data capaian murid berhasil dihapus.');
    }

   public function saveAbsensi(Request $request)
{
    $tahun = $request->input('tahun');
    $bulan = $request->input('bulan');
    $id_murid = $request->input('id_murid');
    $id_guru = $request->input('id_guru');
    $minggu1 = $request->input('minggu1');
    $minggu2 = $request->input('minggu2');
    $minggu3 = $request->input('minggu3');
    $minggu4 = $request->input('minggu4');

    foreach ($id_murid as $key => $muridId) {
        // Cek apakah data absensi sudah ada
        $absensi = Absensi::where('tahun', $tahun)
            ->where('bulan', $bulan)
            ->where('id_murid', $muridId)
            ->first();

        if ($absensi) {
            // Jika data sudah ada, update data absensi yang sudah ada
            $absensi->id_guru = $id_guru[$key];
            $absensi->minggu1 = $minggu1[$key] ?? null;
            $absensi->minggu2 = $minggu2[$key] ?? null;
            $absensi->minggu3 = $minggu3[$key] ?? null;
            $absensi->minggu4 = $minggu4[$key] ?? null;
            $absensi->save();
        } else {
            // Jika data belum ada, buat data baru
            Absensi::create([
                'tahun' => $tahun,
                'bulan' => $bulan,
                'id_murid' => $muridId,
                'id_guru' => $id_guru[$key],
                'minggu1' => $minggu1[$key] ?? null,
                'minggu2' => $minggu2[$key] ?? null,
                'minggu3' => $minggu3[$key] ?? null,
                'minggu4' => $minggu4[$key] ?? null,
            ]);
        }
    }

    return redirect()->route('guru/absensi')->with('berhasil', 'Data absensi berhasil disimpan');
}

}


