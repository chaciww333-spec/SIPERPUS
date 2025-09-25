<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Kategori;
use App\Models\Pustakawan;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $total_Buku = Buku::count();
        $total_Anggota = Anggota::count();
        $total_Kategori = Kategori::count();
        $total_Pustakawan = Pustakawan::count();

        $data = DB::table('peminjaman')
        ->selectRaw('DATE(tgl_pinjam) as tanggal, COUNT(*) as total')
        ->groupBy('tanggal')
        ->orderBy('tanggal', 'ASC')
        ->get();

        $labels = $data->pluck('tanggal')->map(function($item){
            return Carbon::parse($item)->format('d-m');
        });
        $totals = $data->pluck('total');

        $sudahDikembalikan = Pengembalian::count();
        $sedangDipinjam = Peminjaman::count() - $sudahDikembalikan;
        return view('home', compact('total_Buku',
        'total_Anggota',
        'total_Kategori',
        'total_Pustakawan',
        'labels',
        'totals',
        'sudahDikembalikan',
        'sedangDipinjam'
    ));
    }
}
