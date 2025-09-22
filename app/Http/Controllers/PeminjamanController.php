<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Anggota;
class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = Peminjaman::with('pengembalian', 'anggota', 'buku')->get();
        return view('pages.peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.peminjaman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'anggota_id' => 'required',
            'buku_id' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_jatuh_tempo' => 'required',
        ]);
         Peminjaman::create([
            'anggota_id' => $request->anggota_id,
            'buku_id' => $request->buku_id,
            'tgl_pinjam' => now(),
            'tgl_jatuh_tempo' => now()->addDays(7),
            'status' => 'Dipinjam',
         ]);
         return redirect()->route('peminjam.index')->with('succes', 'Buku berhasil dipinjam');
    }

}
