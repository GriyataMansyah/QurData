<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriEkspor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "kategori_ekspor";

    protected $fillable = array(
        "nama"
    );
}
