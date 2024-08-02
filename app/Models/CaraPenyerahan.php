<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaraPenyerahan extends Model
{
    use HasFactory; 

    public $timestamps = false;

    protected $table="cara_penyerahan";

    protected $fillable = array(
        "nama"
    );
}
