<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaraBayar extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "cara_bayar";

    protected $fillable = array(
        "nama"
    );
}
