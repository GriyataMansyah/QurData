<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datacapaian extends Model
{
    use HasFactory;

    protected $table = "Datacapaian";

    protected $fillable = [
        'nama',
        'guru_id'
    ];
}
