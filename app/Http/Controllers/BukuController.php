<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::with('kategori')
            ->orderBy('created_at', 'desc')->get();

        return view('pages.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('pages.buku.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'cover' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required',
            'kategori_id' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
        ]);

        $images = $request->file('cover');
        $directory = 'images/';
        $filename = Str::random(10).'.'.$images->getClientOriginalExtension();
        Storage::putFileAs($directory, $images, $filename);

        Buku::create([
            'cover' => $filename,
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
        ]);

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = Buku::find($id);
        $kategori = Kategori::all();

        return view('pages.buku.show', compact('buku', 'kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = Buku::find($id);
        $kategori = Kategori::all();

        return view('pages.buku.edit', compact('buku', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'cover' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required',
            'kategori_id' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
        ]);
        $buku = Buku::findOrFail($id);

        if ($request->hasFile('cover')) {
            $images = $request->file('cover');
            $directory = 'images/';
            $filename = Str::random(10).'.'.$images->getClientOriginalExtension();
            Storage::putFileAs($directory, $images, $filename);
            $buku->cover = $filename;
        }
        $buku->judul = $request->judul;
        $buku->kategori_id = $request->kategori_id;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;

        $buku->save();

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil dihapus');
    }
}
