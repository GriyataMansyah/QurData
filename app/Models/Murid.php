<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    protected $table = "Murid";

    protected $fillable = [
        "nama",
        "nik",
        "tanggal_lahir",
        "jenis_kelamin",
        "no_hp",
        "id_guru",
    ];
}
