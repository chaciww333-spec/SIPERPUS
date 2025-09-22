<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

class Buku extends Model
{
    protected $table = 'buku';

    protected $fillable = [
        'cover',
        'judul',
        'kategori_id',
        'penulis',
        'penerbit',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'peminjaman', 'id');
    }
}


