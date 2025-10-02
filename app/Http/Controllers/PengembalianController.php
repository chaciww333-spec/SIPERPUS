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
            'tanggal_pengembalian' => 'required|date',
        ]);

        $peminjaman = Peminjaman::findOrFail($request->peminjaman_id);

        $jatuhTempo = Carbon::parse($peminjaman->tanggal_jatuh_tempo);
        $pengembalian = Carbon::parse($request->tanggal_pengembalian);

        $denda = 0;
        if ($pengembalian->gt($jatuhTempo)) {
            $selisihHari = $jatuhTempo->diffInDays($pengembalian);
            $tarifDendaPerHari = 1000; // contoh tarif
            $denda = $selisihHari * $tarifDendaPerHari;
        }

        Pengembalian::create([
            'peminjaman_id' => $request->peminjaman_id,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
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