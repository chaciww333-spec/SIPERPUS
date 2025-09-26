@extends('layouts.app')
@section('title', 'halaman peminjaman')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="title page">Halaman Peminjaman</h3>
            <a href="{{ route('peminjaman.create') }}" class="btn mb-3" style="background-color:#e83e8c; color:white;"><span
                    class="ti ti-plus me-1"></span>Tambah</a>
            <div class="card card-body">
                <table class="table table-striped dataTable">
                   <thead>
                        <tr>
                            <th>No</th>
                            <th>Anggota</th>
                            <th>Cover</th>
                            <th>Judul</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Jatuh Tempo</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                     <tbody>
            @forelse ($peminjaman as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->anggota->nama ?? '-' }}</td>
                    <td>
                        @if($p->buku && $p->buku->cover)
                            <img src="{{ asset('storage/images/'.$p->buku->cover) }}" alt="cover" width="60">

                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $p->buku->judul ?? '-' }}</td>
                    <td>{{ $p->tgl_pinjam }}</td>
                    <td>{{ $p->tgl_jatuh_tempo }}</td>
                    <td>
                        @if($p->pengembalian)
                            <span class="badge bg-success">Sudah Dikembalikan</span>
                        @else
                            <span class="badge bg-danger">Sedang Dipinjam</span>
                        @endif
                    </td>
                    <td>
                        <a href="javascript:;" class="btn btn-sm"
                                        onclick="actionDelete('{{ route('peminjaman.destroy', $p->id) }}')">
                                        <span class="ti ti-trash"></span>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Tidak ada data peminjaman</td>
                </tr>
            @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <form id="form-delete" action="" method="POST" class="d-none">
        @csrf
        @method('DELETE')
    </form>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@push('scripts')
    <script src="{{ asset('/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

    <script type="text/javascript">
        function actionDelete(url) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#form-delete').attr('action', url);
                    $('#form-delete').submit();
                }
            });
        }

        $(function() {
            $('.dataTable').DataTable();
        });
    </script>

    @if (Session::has('success'))
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

   

       
 