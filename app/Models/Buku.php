<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        return $this->belongTo(Kategori::class);
    }
}


