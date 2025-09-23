@extends('layouts.app')
@section('title', 'halaman pengembalian')
@section('content')
        <div class="col-md-12">
            <h3 class="title page">Halaman Pengembalian</h3>
            <a href="{{ route('pengembalian.create') }}" class="btn btn-primary mb-3"><span
                    class="ti ti-plus me-1"></span>Tambah</a>
            <div class="card card-body">
                <table class="table table-striped dataTable">
                   <thead>
                        <tr>
                            <th>No</th>
                            <th>Anggota</th>
                            <th>Buku</th>
                            <th>Tannggal Peminjaman</th>
                            <th>Tannggal Jatuh Tempo</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Denda</th>
                        </tr>
                    </thead>
                     <tbody>
             @foreach($pengembalian as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->peminjaman->anggota->nama }}</td>
                    <td>{{ $p->peminjaman->buku->judul }}</td>
                    <td>{{ $p->peminjaman->tgl_pinjam }}</td>
                    <td>{{ $p->peminjaman->tgl_jatuh_tempo }}</td>
                    <td>{{ $p->tgl_pengembalian }}</td>
                    <td>{{ $p->denda ?? '-' }}</td>
                </tr>
            @endforeach

                    </tbody>
                </table>
            </div>
        </div>
@endsection