<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisEkspor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "jenis_ekspor";

    protected $fillable = array(
        "nama"
    );
}
