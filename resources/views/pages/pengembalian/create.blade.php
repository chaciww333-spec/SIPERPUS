@extends('layouts.app')

@section('title', 'Tambah Pengembalian')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3 class="page-title">Tambah Pengembalian</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pengembalian.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
            <label for="peminjaman_id" class="form-label">Pilih Peminjaman</label>
            <select name="peminjaman_id" id="peminjaman_id" class="form-control" required>
                <option value="">-- Pilih Data Peminjaman --</option>
                @foreach($peminjaman as $pinjam)
                    <option value="{{ $pinjam->id }}">
                        {{ $pinjam->anggota->nama }} | {{ $pinjam->buku->judul }} | Pinjam: {{ $pinjam->tgl_pinjam }}
                    </option>
                @endforeach
            </select>
        </div>
<div class="mb-3">
            <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
            <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="denda" class="form-label">Denda</label>
            <input type="number" name="denda" id="denda" class="form-control">
        </div>

   
                            <button type="submit" class="btn" style="background-color:#e83e8c; color:white;">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
