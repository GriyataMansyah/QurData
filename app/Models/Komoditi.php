<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komoditi extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table= "komoditi";

    protected $fillable = array(
        "nama"
    );
}
