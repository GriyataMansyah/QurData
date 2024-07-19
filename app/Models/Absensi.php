<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = "Absensi";

    protected $fillable = [
        "tahun",
        "bulan",
        "minggu1",
        "minggu2",
        "minggu3",
        "minggu4",
        "id_murid",
        "id_guru",
        "time1",
        "time2",
        "time3",
        "time4",    
    ];
}
