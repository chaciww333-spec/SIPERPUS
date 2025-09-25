<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table= 'peminjaman';

    protected $fillable=[
        'anggota_id',
        'buku_id',
        'tgl_pinjam',
        'tgl_jatuh_tempo',
        'status',
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
    
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
    
    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class);
    }
    public function details()
    {
        return $this->hasMany(PeminjamanDetail::class, 'peminjaman_id');
    }

}
