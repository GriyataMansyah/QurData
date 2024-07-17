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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
        return view('admin/dashboard', compact('Murid','Guru','Admin','Superadmin','Muridall','Guruall','Adminall','Superadminall'));
    }

    public function dataguru()
    {
        $Guruall = Guru::all();
        return view('admin/dataguru', compact('Guruall'));
    }

    public function datamurid()
    {
        $Muridall = Murid::all();
        return view('admin/datamurid', compact('Muridall'));
    }

    public function dataindikator()
    {
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Admin = Admin::where('id_akun', $IdAkun)->first();
        $capaians = Capaian::all();
        $data = Datacapaian::all();
        return view('admin/dataindikator', compact('data','capaians','Admin'));
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
                'admin_id' => $gurumeId
            ]);
        }

        return redirect()->route('admin/indikator')->with('berhasil', 'Data Indikator berhasil ditambahkan.'); 
    }

    public function Editcapaian(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);
    
        try {
            $capaian = Datacapaian::findOrFail($id);
            $capaian->nama = $request->nama;
            $capaian->save();
    
            $capaians = Capaian::where('datacapaian_id', $id)->get();
            foreach ($capaians as $capaian_item) {
                $capaian_item->nama_indikator = $request->nama;
                $capaian_item->save();
            }
    
            return redirect()->route('admin/indikator')->with('berhasil', 'Data Indikator berhasil diedit.');
        } catch (\Exception $e) {
            return redirect()->route('admin/indikator')->with('gagal', 'Terjadi kesalahan saat mengedit data Indikator.');
        }
    }

    public function Removecapaian($id)
    {
        DB::beginTransaction();
    
        try {
            $datacapaian = Datacapaian::findOrFail($id);
            $relatedCapaian = Capaian::where('datacapaian_id', $id)->exists();
    
            if ($relatedCapaian) {
                throw new \Exception('Tidak dapat menghapus Data Indikator karena masih digunakan.');
            }
    
            $datacapaian->delete();
    
            DB::commit();
    
            return redirect()->route('admin/indikator')->with('berhasil', 'Data Indikator berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            DB::rollBack();
            return redirect()->route('admin/indikator')->with('gagal', 'Data Indikator tidak ditemukan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin/indikator')->with('gagal', $e->getMessage());
        }
    }

    public function setting()
    {
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Gurume = Admin::where('id_akun', $IdAkun)->first();
        return view('admin/setting', compact('Akun','Gurume'));
    }

    public function Addguru(Request $request)
    {
        
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            // 'nik' => 'required|numeric|min:11',
            'nama' => 'required|string|max:255',
            // 'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki - Laki,Perempuan',
            // 'no_hp' => 'required|numeric',
        ]);

        $akun = new Akun();
        $akun->username = $request->username;
        $akun->password = bcrypt($request->password);
        $akun->role = 'guru'; 
        $akun->save(); 

        $guru = new Guru();
        $guru->nik = $request->nik;
        $guru->nama = $request->nama;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->no_hp = $request->no_hp;
        $guru->id_akun = $akun->id;
        $guru->save();

        return redirect()->route('admin/dataguru')->with('berhasil', 'Data murid berhasil ditambahkan!');
    }

    public function gantiidentitasadmin(Request $request)
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
        $Admin = Admin::where('id_akun', $akun->id)->first();
        $akun->username = $request->input('username');
    
        if ($request->filled('new_password')) {
            $akun->password = bcrypt($request->input('new_password'));
        }
    
        $Admin->nama = $request->input('nama');
        $Admin->tanggal_lahir = $request->input('tgl_lahir');
    
        $akun->save();
        $Admin->save();
    
        return redirect()->route('admin/setting')->with('success', 'Data akun berhasil disimpan!');
    }

    public function Removeguru(Request $request)
    {
        $guruId = $request->input('guru_id');

        $guruId = Guru::findOrFail($guruId);
        $guruId->delete();

        return redirect()->route('admin/dataguru');
    }

    
}
