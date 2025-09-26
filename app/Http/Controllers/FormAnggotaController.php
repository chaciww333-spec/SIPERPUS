<?php

namespace App\Http\Controllers;
use App\Models\Anggota;
use Illuminate\Http\Request;

class FormAnggotaController extends Controller
{
    public function showCard($id)
    {
        $anggota = Anggota::findOrFail($id);

        // Tentukan foto berdasarkan jenis kelamin
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
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_telepon' => 'required',
            'tanggal_bergabung' => 'required',
        ]);

        Anggota::create($request->all());
        return redirect()->route('anggota.index')->with('succes', 'Data berhasil disimpan');
     }

}
