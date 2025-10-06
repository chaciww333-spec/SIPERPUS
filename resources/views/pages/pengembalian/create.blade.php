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
                           <select name="peminjaman_id" class="form-control">
                                @foreach($peminjaman as $p)
                                    <option value="{{ $p->id }}">{{ $p->anggota->nama }} - {{ $p->buku->judul }}</option>
                                @endforeach
                            </select>

                            <div class="mb-3">
                                <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
                                <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" 
                                    class="form-control" required>
                            </div>
                            <button type="submit" class="btn" style="background-color:#e83e8c; color:white;">
                                <span class="ti ti-send me-1"></span>
                                Simpan
                            </button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
