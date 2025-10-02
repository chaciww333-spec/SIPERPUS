<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;
use App\Models\Peminjaman;
use Carbon\Carbon;
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
       $peminjaman = Peminjaman::all();
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

        $peminjaman = Peminjaman::findOrFail($request->peminjaman_id);

        $jatuhTempo = Carbon::parse($peminjaman->tgl_jatuh_tempo);
        $tglPengembalian = Carbon::parse($request->tgl_pengembalian);
        
        $tarifDenda = 1000;
        $denda = 0;
        if ($tglPengembalian->gt($jatuhTempo)) {
            $selisihHari = $jatuhTempo->diffInDays($tglPengembalian);
            $denda = $selisihHari * $tarifDenda;
        }

        Pengembalian::create([
            'peminjaman_id' => $request->peminjaman_id,
            'tgl_pengembalian' => $request->tgl_pengembalian,
            'denda' => $denda,
        ]);

        return redirect()->route('pengembalian.index')->with('success', 'Pengembalian berhasil ditambahkan!');
    }
     public function destroy(string $id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->delete();
        return redirect()->route('pengembalian.index')->with('success', 'Data kategori berhasil dihapus');
    }
}