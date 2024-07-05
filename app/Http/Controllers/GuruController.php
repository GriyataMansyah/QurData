<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Admin;
use App\Models\Murid;
use App\Models\Superadmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('Guru/setting');
    }
}
