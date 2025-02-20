<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capaian extends Model
{
    use HasFactory;

    protected $table="Capaian";

    protected $fillable=[
        'datacapaian_id',
        'nama_indikator',
        'status',
        'keterangan',
        'id_murid',
        'id_guru',
    ];

    public function capaians()
    {
        return $this->hasMany(Capaian::class, 'datacapaian_id');
    }
}
