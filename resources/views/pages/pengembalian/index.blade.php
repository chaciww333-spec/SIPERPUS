@extends('layouts.app')
@section('title', 'halaman pengembalian')
@section('content')
    <div class="row">
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
                     <td>
                        <a href="javascript:;" class="btn btn-sm"
                                        onclick="actionDelete('{{ route('pengembalian.destroy', $p->id) }}')">
                                        <span class="ti ti-trash"></span>
                        </a>
                    </td>
                </tr>
            @endforeach

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

   

       
 