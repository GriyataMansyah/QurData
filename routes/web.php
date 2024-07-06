<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperadminController;

// ====================== Menampilkan Login =============================
Route::get('/', function () {return redirect()->route('login');});

Route::get('login', [AkunController::class, 'index'])->name('login');


// ======================== Proses Login ================================
Route::POST('login', [AkunController::class, 'auth'])->name('auth');

Route::post('logout', [AkunController::class, 'logout'])->name('logout');




// ====================== Menampilkan Dashboard =========================
Route::get('dashboard/superadmin', [SuperadminController::class, 'dashboard'])->name('dashboard/superadmin');

// ====================== Menampilkan Data Admin =========================
Route::get('superadmin/dataadmin', [SuperadminController::class, 'dataadmin'])->name('superadmin/dataadmin');

// ====================== Menampilkan Data Guru =========================
Route::get('superadmin/dataguru', [SuperadminController::class, 'dataguru'])->name('superadmin/dataguru');

// ====================== Menampilkan Data Murid =========================
Route::get('superadmin/datamurid', [SuperadminController::class, 'datamurid'])->name('superadmin/datamurid');

// ====================== Menampilkan Setting ============================
Route::get('superadmin/setting', [SuperadminController::class, 'setting'])->name('superadmin/setting');






// ====================== Menampilkan Dashboard ===========================
Route::get('dashboard/admin', [AdminController::class, 'dashboard'])->name('dashboard/admin');

// ====================== Menampilkan Data Guru ===========================
Route::get('admin/dataguru', [AdminController::class, 'dataguru'])->name('admin/dataguru');

// ====================== Menampilkan Data Murid ==========================
Route::get('admin/datamurid', [AdminController::class, 'datamurid'])->name('admin/datamurid');

// ====================== Menampilkan Setting  ============================
Route::get('admin/setting', [AdminController::class, 'setting'])->name('admin/setting');






// ====================== Menampilkan Dashboard ===========================
Route::get('dashboard/Guru', [GuruController::class, 'dashboard'])->name('dashboard/Guru');

// ====================== Menampilkan Data Absensi ========================
Route::get('guru/absensi', [GuruController::class, 'absensi'])->name('guru/absensi');

// ====================== Menampilkan Data Capaian ========================
Route::get('guru/capaian', [GuruController::class, 'capaian'])->name('guru/capaian');

// ================== Menampilkan Data Catatan Capaian ====================
Route::get('guru/catatancapaian', [GuruController::class, 'catatancapaian'])->name('guru/catatancapaian');

// ====================== Menampilkan Data Murid ==========================
Route::get('guru/datamurid', [GuruController::class, 'datamurid'])->name('guru/datamurid');

// ====================== Menampilkan Setting =============================
Route::get('guru/setting', [GuruController::class, 'setting'])->name('guru/setting');

// =========================== TAMBAH MURID ===============================
Route::post('/addmurid', [GuruController::class, 'Addmurid'])->name('Addmurid');

// =========================== HAPUS MURID ================================
Route::delete('/removemurid',[GuruController::class, 'Removemurid'])->name('Removemurid');




