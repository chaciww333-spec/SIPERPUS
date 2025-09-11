<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pustakawan extends Model
{
    protected $table = 'pustakawan';

    protected $fillable = [
        'Nama',
        'Alamat',
        'Telepon',
        'Jabatan',
    ];
}
