@extends('layouts.app')
@section('title', 'Detail Buku')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body p-0">
                <table class="table table-striped">
                    <tr>
                        <th width="25%">ID</th>
                        <td width="10px">:</td>
                        <td>{{ $buku->id }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Cover</th>
                        <td width="10px">:</td>
                        <td>{{ $buku->cover }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Judul</th>
                        <td width="10px">:</td>
                        <td>{{ $buku->judul }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Kategori ID</th>
                        <td width="10px">:</td>
                        <td>{{ $buku->kategori_id }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Penulis</th>
                        <td width="10px">:</td>
                        <td>{{ $buku->penulis }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Penerbit</th>
                        <td width="10px">:</td>
                        <td>{{ $buku->penerbit }}</td>
                    </tr>
                   
                    <tr>
                        <th width="25%">Terdaftar Pada</th>
                        <th width="10px">:</th>
                        <th>{{ $buku->created_at->isoformat('d M Y H:i') }}</th>
                    </tr>
                    <tr>
                        <th width="25%">Terakhir Diperbarui</th>
                        <th width="10px">:</th>
                        <th>{{ $buku->updated_at->isoformat('d M Y H:i') }}</th>
                    </tr>
                </table>
            </div>

            <div class="d-flex gap-2 mt-3">
                <a href="{{ route('buku.index') }}" class="btn btn-secondary">
                    <span class="ti ti-arrow-left me-1"></span>
                    Kembali
                </a>

                <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-primary">
                    <span class="ti ti-pencil me-1"></span>
                    Edit
                </a>
            </div>
        </div>
    </div>
@endsection
