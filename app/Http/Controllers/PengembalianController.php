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
       $pengembalian = Pengembalian::with('peminjaman')->get();
       return view('pages.pengembalian.index', compact('pengembalian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjaman = Peminjaman::findOrFail($peminjaman_id);
        return view('pages.pengembalian.create', compact('pengembalian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'peminjaman_id' => 'required|exists:peminjaman,id',
        ]);
        $pengembalian = pengembalian::create([
            'peminjaman_id' => $request->peminjaman_id,
            'tgl_pengembalian' => now(),
            'denda' => $request->denda ?? 0,
        ]);
         $pengembalian->peminjaman->update([
            'status' => 'Dikembalikan'
         ]);
         return redirect()->route('pengembalian.index')->with('success', 'Buku berhasil dikembalikan');
    }
}