<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;
use App\Models\Peminjaman;
class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $pengembalian = Pengembalian::with('peminjaman.anggota', 'peminjaman.buku')->get();
       return view('pages.pengembalian.index', compact('pengembalian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjaman = Peminjaman::whereDoesntHave('pengembalian')->with('anggota', 'buku')->get();
        return view('pages.pengembalian.create', compact('peminjaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'peminjaman_id' => 'required',
            'tgl_pengembalian' => 'required|date',
        ]);
        Pengembalian::create([
            'peminjaman_id' => $request->peminjaman_id,
            'tgl_pengembalian' => $request->tgl_pengembalian,
            'denda' => $request->denda ?? 0,
        ]);
         Peminjaman::where('id', $request->peminjaman_id)->update([
            'status' => 'Dikembalikan'
         ]);
         return redirect()->route('pengembalian.index')->with('success', 'Buku berhasil dikembalikan');
    }
}