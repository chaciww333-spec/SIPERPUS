@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center mb-4">
  <i class="fas fa-book fa-3x" style="font-size: 2rem; color: #e83e8c; margin-right: 10px;"></i>
  <h2 class="mb-0">Daftar Buku</h2>
</div>
    <a href="{{ route('buku.create') }}" class="btn mb-3" style="background-color:#e83e8c; color:white;"><span
                    class="ti ti-plus me-1"></span>Tambah</a>
                    <div class="container">

    {{-- Form Search --}}
    <form method="GET" action="{{ route('buku.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari judul / penulis / penerbit..."
                   value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </form>

        <div class="row">
            @foreach ($buku as $buku)
                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <div class="card h-100">

                        <img src="{{ asset('storage/images/' . $buku->cover) }}" class="card-img-top" alt="{{ $buku->judul }}"
                            style="height: 260px; object-fit: cover;">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $buku->judul }}</h5>

                            <p class="card-text mb-1"><strong>Kategori:</strong> {{ $buku->kategori->nama }}</p>
                            <p class="card-text mb-1"><strong>Penulis:</strong> {{ $buku->penulis }}</p>
                            <p class="card-text mb-1"><strong>Penerbit:</strong> {{ $buku->penerbit }}</p>

                            
                            <div class="mt-auto d-flex justify-content-between">
                                <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <button onclick="actionDelete('{{ route('buku.destroy', $buku->id) }}')"
                                    class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Form delete (hidden) --}}
    <form id="form-delete" method="POST" style="display:none;">
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
