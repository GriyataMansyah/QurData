<?php

namespace App\Http\Controllers;

use App\Models\Superadmin;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function dashboard()
    {
        return view('Superadmin/dashboard');
    }

    public function dataadmin()
    {
        return view('Superadmin/dataadmin');
    }

    public function dataguru()
    {
        return view('Superadmin/dataguru');
    }

    public function datamurid()
    {
        return view('Superadmin/datamurid');
    }

    public function setting()
    {
        return view('Superadmin/setting');
    }

}
