<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KantorMuatAsal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "kantor_muat_asal";

    protected $fillable = array(
        "nama"
    );
}
