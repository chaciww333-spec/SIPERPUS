<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';

    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'jenis_kelamin',
        'nomor_telepon',
        'tanggal_bergabung',
    ];

     public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'peminjaman', 'id');
    }
}
