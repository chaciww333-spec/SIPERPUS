@extends('layouts.app')
@section('title', 'Daftar Anggota')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="title page">Daftar Anggota</h3>
            <a href="{{ route('anggota.create') }}" class="btn btn-primary mb-3"><span class="ti ti-plus me-1"></span>Tambah</a>
            <div class="card card-body">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nis</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Tanggal Bergabung</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggota as $anggota)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $anggota->nis }}</td>
                                <td>{{ $anggota->nama }}</td>
                                <td>{{ $anggota->kelas }}</td>
                                <td>{{ $anggota->jenis_kelamin }}</td>
                                <td>{{ $anggota->nomor_telepon }}</td>
                                <td>{{ $anggota->tanggal_bergabung }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if(Session::has('success'))
    <script type="text/javascript">
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '{{ Session::get('success') }}',
            showConfirmButton: false,
            timer: 1000
        });
    </script>
    @endif
