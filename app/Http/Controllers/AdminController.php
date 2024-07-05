<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function dataguru()
    {
        return view('admin/dataguru');
    }

    public function datamurid()
    {
        return view('admin/datamurid');
    }

    public function setting()
    {
        return view('admin/setting');
    }
}
