<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\form;
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
    public function Addguru(Request $request)
    {
        
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            // 'nik' => 'required|numeric|min:11',
            // 'nama' => 'required|string|max:255',
            // 'tanggal_lahir' => 'required|date',
            // 'jenis_kelamin' => 'required|in:Laki - Laki,Perempuan',
            'no_hp' => 'required|numeric',
        ]);

        $akun = new Akun();
        $akun->username = $request->username;
        $akun->password = bcrypt($request->password);
        $akun->role = 'guru'; 
        $akun->save(); 

        $guru = new Guru();
        $guru->nik = $request->npwp;
        $guru->nama = $request->nama;
        $guru->tanggal_lahir = "2000/10/10";
        $guru->jenis_kelamin = "Laki - Laki";
        $guru->no_hp = $request->no_hp;
        $guru->id_akun = $akun->id;
        $guru->save();

        return redirect()->route('login')->with('success', 'Akun berhasil Dibuat!');
    }

    public function addForm(Request $request)
    {
        $validatedData = $request->validate([
            'id_guru' => 'required|exists:Guru,id', // Validasi id_guru harus ada di tabel Guru
        ]);

        // Ambil data dari request atau isi dengan nilai default jika kosong
        $data = [
            'nomor' => $request->input('nomor', 'DEFAULT_NOMOR'),
            'kantor_pabean_muat_asal' => $request->input('kantor_pabean_muat_asal', 'DEFAULT_KANTOR_PABEAN_MUAT_ASAL'),
            'pelabuhan_muat_ekspor' => $request->input('pelabuhan_muat_ekspor', 'DEFAULT_PELABUHAN_MUAT_EKSPOR'),
            'kantor_pabean_muat_ekspor' => $request->input('kantor_pabean_muat_ekspor', 'DEFAULT_KANTOR_PABEAN_MUAT_EKSPOR'),
            'jenis_ekspor' => $request->input('jenis_ekspor', 'DEFAULT_JENIS_EKSPOR'),
            'kategori' => $request->input('kategori', 'DEFAULT_KATEGORI'),
            'cara_dagang' => $request->input('cara_dagang', 'DEFAULT_CARA_DAGANG'),
            'cara_bayar' => $request->input('cara_bayar', 'DEFAULT_CARA_BAYAR'),
            'komoditi' => $request->input('komoditi', 'DEFAULT_KOMODITI'),
            'curah' => $request->input('curah', 'DEFAULT_CURAH'),
            'nama_eksportir' => $request->input('nama_eksportir', 'DEFAULT_NAMA_EKSPORTIR'),
            'alamat_eksportir' => $request->input('alamat_eksportir', 'DEFAULT_ALAMAT_EKSPORTIR'),
            'nama_penerima' => $request->input('nama_penerima', 'DEFAULT_NAMA_PENERIMA'),
            'alamat_penerima' => $request->input('alamat_penerima', 'DEFAULT_ALAMAT_PENERIMA'),
            'nama_pembeli' => $request->input('nama_pembeli', 'DEFAULT_NAMA_PEMBELI'),
            'alamat_pembeli' => $request->input('alamat_pembeli', 'DEFAULT_ALAMAT_PEMBELI'),
            'seri_kemasan' => $request->input('seri_kemasan', 'DEFAULT_SERI_KEMASAN'),
            'jumlah_kemasan' => $request->input('jumlah_kemasan', 1),
            'jenis_kemasan' => $request->input('jenis_kemasan', 'DEFAULT_JENIS_KEMASAN'),
            'merek_kemasan' => $request->input('merek_kemasan', 'DEFAULT_MEREK_KEMASAN'),
            'ukuran_peti_kemas' => $request->input('ukuran_peti_kemas', 'DEFAULT_UKURAN_PETI_KEMAS'),
            'jenis_peti_kemas' => $request->input('jenis_peti_kemas', 'DEFAULT_JENIS_PETI_KEMAS'),
            'type_peti_kemas' => $request->input('type_peti_kemas', 'DEFAULT_TYPE_PETI_KEMAS'),
            'valuta' => $request->input('valuta', 'DEFAULT_VALUTA'),
            'ndpmb' => $request->input('ndpmb', 'DEFAULT_NDPBM'),
            'cara_penyerahan' => $request->input('cara_penyerahan', 'DEFAULT_CARA_PENYERAHAN'),
            'nilai_ekspor' => $request->input('nilai_ekspor', 0.00),
            'freight' => $request->input('freight', 0.00),
            'asuransi' => $request->input('asuransi', 0.00),
            'nilai_maklan' => $request->input('nilai_maklan', 0.00),
            'nilai_bea_keluar' => $request->input('nilai_bea_keluar', 0.00),
            'hs' => $request->input('hs', 'DEFAULT_HS'),
            'lartas' => $request->input('lartas', 'DEFAULT_LARTAS'),
            'kode' => $request->input('kode', 'DEFAULT_KODE'),
            'uraian' => $request->input('uraian', 'DEFAULT_URAIAN'),
            'mark' => $request->input('mark', 'DEFAULT_MARK'),
            'tipe' => $request->input('tipe', 'DEFAULT_TIPE'),
            'negara_asal_barang' => $request->input('negara_asal_barang', 'DEFAULT_NEGARA_ASAL_BARANG'),
            'harga_fob' => $request->input('harga_fob', 0.00),
            'volume_barang' => $request->input('volume_barang', 0.00),
            'berat_bersih' => $request->input('berat_bersih', 0.00),
            'berat_kotor' => $request->input('berat_kotor', 0.00),
            'harga_satuan_fob' => $request->input('harga_satuan_fob', 0.00),
            'tempat_penerima' => $request->input('tempat_penerima', 'DEFAULT_TEMPAT_PENERIMA'),
            'tanggal' => $request->input('tanggal', now()->format('Y-m-d')),
            'nama' => $request->input('nama', 'DEFAULT_NAMA'),
            'jabatan' => $request->input('jabatan', 'DEFAULT_JABATAN'),
            'id_guru' => $request->input('id_guru') // id_guru harus ada
        ];

        // Buat entri baru di database
        Form::create($data);

        // Redirect ke route dengan pesan sukses
        return redirect()->route('guru/dafdok')->with('success', 'Dokumen berhasil Dibuat!');
    }

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

    public function dafdok()
    {
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Gurume = Guru::where('id_akun', $IdAkun)->first();
        $Form = Form::where('id_guru', $Gurume->id)->get();
        $forms = Form::all();
        return view('Guru/dafdok', compact('Form','Gurume','forms'));
    }

    public function hapusdaf(Request $request){
        $id = request('id');
        Form::destroy($id);
        return redirect()->route('guru/dafdok')->with('success', 'Dokumen berhasil Dihapus!');
    }

    public function form()
    {
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Gurume = Guru::where('id_akun', $IdAkun)->first();

        return view('Guru/form',compact('Gurume','Akun'));
    }

    public function output2(Request $request)
    {
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Gurume = Guru::where('id_akun', $IdAkun)->first();
        $Forms = Form::where('id_guru', $Gurume->id)->get();
        $A = $Forms->sortByDesc('created_at')->first();
        
        return view('Guru/output2',compact('A'));
    }

    public function absensi(Request $request)
    {
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Gurume = Guru::where('id_akun', $IdAkun)->first();
        $muridAll = Murid::all();
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        $muridIds = $muridAll->pluck('id');

        $tampilkanAbsensi = Absensi::where('bulan', $bulan)
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        
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

       
        return view('Guru/absensi', compact('tampilkanAbsensi','muridAll','Gurume','minggu1Kosong','minggu2Kosong','minggu3Kosong','minggu4Kosong','bulan','tahun'));
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
        $Gurume = Guru::where('id_akun',$IdAkun)->first();
        $Capaian = Capaian::where('id_murid', $id)->get();
        $hasCapaian = DB::table('Capaian')
        ->where('id_murid', $id)
        ->get();

        return view('Guru.catatancapaian', compact('Gurume','Datacapaian', 'Murid','Akun','hasCapaian'));
    }

    public function datamurid()
    {
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Gurume = Guru::where('id_akun', $IdAkun)->first();
        $Muridall = Murid::all();
        $MuridallGroup = Murid::where('id_guru', $Gurume)->get();
        return view('Guru/datamurid', compact('Muridall','MuridallGroup','Gurume'));
    }

    public function setting()
    {
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Gurume = Guru::where('id_akun', $IdAkun)->first();
        return view('Guru/setting',  compact('Gurume','Akun'));
    }

    public function rekapitulasi(Request $request)
    {
        $IdAkun = Auth::id();
        $Akun = Akun::where('id',$IdAkun)->first();
        $Gurume = Guru::where('id_akun', $IdAkun)->first();
        $muridAll = Murid::all();
        $tahun = $request->input('tahun');

        $Januari = Absensi::where('bulan', 'Januari')
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        $Februari = Absensi::where('bulan', 'Februari')
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        $Maret = Absensi::where('bulan', 'Maret')
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        $April = Absensi::where('bulan', 'April')
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        $Mei = Absensi::where('bulan', 'Mei')
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        $Juni = Absensi::where('bulan', 'Juni')
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        $Juli = Absensi::where('bulan', 'Juli')
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        $Agustus = Absensi::where('bulan', 'Agustus')
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        $September = Absensi::where('bulan', 'September')
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        $Oktober = Absensi::where('bulan', 'Oktober')
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        $November = Absensi::where('bulan', 'November')
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        $Desember = Absensi::where('bulan', 'Desember')
            ->where('tahun', $tahun)
            ->where('id_guru', $Gurume->id)
            ->get()
            ->groupBy('id_murid');

        $attendances = Absensi::where('tahun', $tahun)->get();

        // Group by student
        $students = $attendances->groupBy('id_murid');

        $attendancePercentages = [];

        foreach ($students as $studentId => $records) {
            $totalDays = $records->count() * 4; // Assuming 4 weeks per month, adjust as needed
            $presentCount = 0;

            foreach ($records as $record) {
                $presentCount += ($record->minggu1 === 'Hadir') ? 1 : 0;
                $presentCount += ($record->minggu2 === 'Hadir') ? 1 : 0;
                $presentCount += ($record->minggu3 === 'Hadir') ? 1 : 0;
                $presentCount += ($record->minggu4 === 'Hadir') ? 1 : 0;
            }

            // $attendancePercentages[$studentId] = ($presentCount / $totalDays) * 100;
            $attendancePercentages[$studentId] = round(($presentCount / $totalDays) * 100);
        }

        return view('Guru/rekapitulasi',compact('muridAll','tahun','Gurume','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember','attendancePercentages'));
    }

    public function output(Request $request)
    {
        $id = $request->query('id');
        $Murid = Murid::find($id);
        $Capaian = Capaian::where('id_murid', $id)->get();
        $Guru = Guru::find($Murid->id_guru);

        return view('Guru/output', compact('id', 'Murid', 'Capaian','Guru'));
    }

    public function Addmurid(Request $request)
    {
        // Validasi input
        $request->validate([
            // 'nik' => 'numeric',
            'nama' => 'required|string|max:255',
            // 'tanggal_lahir' => 'date',
            'jenis_kelamin' => 'required|in:Laki - Laki,Perempuan',
            // 'no_hp' => 'numeric',
            'id_guru' => 'numeric',
        ]);

        // Buat data murid baru
        $murid = new Murid();
        $murid->nik = $request->nik;
        $murid->nama = $request->nama;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->jenis_kelamin = $request->jenis_kelamin;
        $murid->no_hp = $request->no_hp;
        $murid->id_guru = $request->id_guru;
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
    

    // public function AddCapaian(Request $request)
    // {

    // $request->validate([
    //     'id' => 'required|exists:Guru,id',
    //     'capaian' => 'required|array',
    //     'capaian.*' => 'required|string|max:255'
    // ]);

    //     $gurumeId = $request->id;

    //     foreach ($request->capaian as $capaian) {
    //         Datacapaian::create([
    //             'nama' => $capaian,
    //             'guru_id' => $gurumeId
    //         ]);
    //     }

    //     return redirect()->route('guru/capaian')->with('berhasil', 'Capaian berhasil ditambahkan.'); 
    // }


    // public function Removecapaian($id)
    // {
    // $capaian = Datacapaian::find($id);
    // $capaian->delete();

    // return redirect()->route('guru/capaian')->with('berhasil', 'Capaian berhasil dihapus.');
    // }

    public function Addcatatan(Request $request)
    {
        $validatedData = $request->validate([
            'data.*.nama_indikator' => 'required|string|max:255',
            'data.*.status' => 'required|string|max:255',
            'data.*.keterangan' => 'nullable|string',
            'id_murid' => 'required|exists:murid,id',
            'id_guru' => 'required|exists:guru,id',
        ]);
    
        foreach ($validatedData['data'] as $data) {
            // Cari id dari Datacapaian berdasarkan nama_indikator
            $datacapaian = Datacapaian::where('nama', $data['nama_indikator'])->first();
        
            // Jika datacapaian tidak ditemukan, bisa di-handle sesuai kebutuhan (misalnya lewati atau beri pesan error)
            if (!$datacapaian) {
                continue; // atau tambahkan log atau pesan error
            }
        
            // Buat entri baru di Capaian
            Capaian::create([
                'nama_indikator' => $data['nama_indikator'],
                'datacapaian_id' => $datacapaian->id,
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
        $date = now();
    
        foreach ($id_murid as $key => $muridId) {
            // Cek apakah data absensi sudah ada
            $absensi = Absensi::where('tahun', $tahun)
                ->where('bulan', $bulan)
                ->where('id_murid', $muridId)
                ->first();
    
            $data = [
                'tahun' => $tahun,
                'bulan' => $bulan,
                'id_murid' => $muridId,
                'id_guru' => $id_guru[$key],
                'minggu1' => $minggu1[$key] ?? null,
                'minggu2' => $minggu2[$key] ?? null,
                'minggu3' => $minggu3[$key] ?? null,
                'minggu4' => $minggu4[$key] ?? null,
            ];
    
            if ($absensi) {
                // Update only if the value has changed
                if ($absensi->minggu1 !== $minggu1[$key] && !empty($minggu1[$key])) {
                    $data['time1'] = $date;
                } else {
                    unset($data['minggu1']);
                }
    
                if ($absensi->minggu2 !== $minggu2[$key] && !empty($minggu2[$key])) {
                    $data['time2'] = $date;
                } else {
                    unset($data['minggu2']);
                }
    
                if ($absensi->minggu3 !== $minggu3[$key] && !empty($minggu3[$key])) {
                    $data['time3'] = $date;
                } else {
                    unset($data['minggu3']);
                }
    
                if ($absensi->minggu4 !== $minggu4[$key] && !empty($minggu4[$key])) {
                    $data['time4'] = $date;
                } else {
                    unset($data['minggu4']);
                }
    
                $absensi->update($data);
            } else {
                if (!empty($minggu1[$key])) {
                    $data['time1'] = $date;
                }
                if (!empty($minggu2[$key])) {
                    $data['time2'] = $date;
                }
                if (!empty($minggu3[$key])) {
                    $data['time3'] = $date;
                }
                if (!empty($minggu4[$key])) {
                    $data['time4'] = $date;
                }
                Absensi::create($data);
            }
        }
    
        return redirect()->route('guru/absensi')->with('berhasil', 'Data absensi berhasil disimpan');
    }
    
    
    

}


