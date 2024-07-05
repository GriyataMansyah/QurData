<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = "Guru";

    protected $fillable = [
        "nama",
        "nik",
        "tanggal_lahir",
        "jenis_kelamin",
        "no_hp",
        "id_akun",
    ];
}
