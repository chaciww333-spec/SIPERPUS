<?php

namespace App\Http\Controllers;
use App\Models\Anggota;
use App\Models\Buku;
use Illuminate\Http\Request;

class FormAnggotaController extends Controller
{
   public function dashboard()
{
    $anggotaId = session('anggota_id');
    if(!$anggotaId){
        return redirect()->route('anggota.create')->with('error', 'Data anggota belum tersedia.');
    }
    $anggota = Anggota::find($anggotaId);
    $buku = Buku::all();
    return view('pages.anggota.dashboard', compact('anggota','buku'));
}
    public function daftarBuku()
{
    $buku = Buku::all();
    return view('anggota.buku', compact('buku'));
}
    public function buku($id)
{
    $anggota = Anggota::findOrFail($id);
    $buku = Buku::all();

    return view('anggota.buku', compact('anggota','buku'));
}
    public function showCard($id)
    {
        $anggota = Anggota::findOrFail($id);
        $foto = $anggota->jenis_kelamin === 'Laki-Laki' 
            ? asset('/storage/images/man.jpg') 
            : asset('/storage/images/woman.jpg');

        return view('pages.anggota.kartu', compact('anggota','foto'));
    }
    public function kartu($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('pages.anggota.kartu', compact('anggota'));
    }
    public function index()
    {
        $anggota = Anggota::all();
        return view('pages.anggota.index', compact('anggota'));
    }
     public function create()
     {
        return view('pages.anggota.create');
     }
   public function store(Request $request)
    {
        $validated=$request->validate([
            'nis'            => 'required',
            'nama'           => 'required',
            'kelas'          => 'required',
            'jenis_kelamin'  => 'required|in:L,P',
            'nomor_telepon'  => 'required',
            'tanggal_bergabung' => 'required|date',
        ]);

         $anggota=Anggota::create($validated);

         session(['anggota_id' => $anggota->id]);

return redirect()->route('anggota.dashboard')
                        ->with('success', 'Selamat datang! Data anggota berhasil ditambahkan');
    }
}
