<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\SessionGuard;

class Akun extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'Akun';

    protected $fillable = [
        'username',
        'password',
        'role',
    ];
}
