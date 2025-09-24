@extends('layouts.app')
@section('title', 'Daftar Anggota')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h3 class="title page">Daftar Anggota</h3>
            <a href="{{ route('anggota.create') }}" class="btn btn-primary mb-3"><span class="ti ti-plus me-1"></span>Tambah</a>
            <div class="card card-body">
                <table class="table table-striped dataTable" style="background-color:FFE1E1 ">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nis</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Tanggal Bergabung</th>
                            <th scope="col">Aksi</th>
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
                                <td>
                        <a href="{{ route('anggota.kartu', $anggota->id) }}" >Lihat Kartu</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                
                </table>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@push('scripts')
    <script src="{{ asset('/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
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
@endpush



