@extends('layouts.app')
@section('title', 'halaman buku')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="title page">Halaman Buku</h3>
            <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3"><span class="ti ti-plus me-1"></span>Tambah</a>
            <div class="card card-body">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $buku)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    
                                        <img src="{{ asset('storage/images/' . $buku->cover) }}" alt="{{ $buku->nama }}"
                                            width=100>
                                    
                                </td>
                                <td>{{ $buku->judul }}</td>
                                <td>{{ $buku->kategori->nama }}</td>
                                <td>{{ $buku->penulis }}</td>
                                <td>{{ $buku->penerbit }}</td>
                                <td>
                                    <a href="{{ route('buku.show', $buku->id) }}" class="btn btn-sm btn-secondary">
                                        <span class="ti ti-eye"></span>
                                    </a>
                                    <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-primary">
                                        <span class="ti ti-pencil"></span>
                                    </a>
                                    <a href="javascript:;" class="btn btn-sm btn-danger"
                                        onclick="actionDelete('{{ route('buku.destroy', $buku->id) }}')">
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
