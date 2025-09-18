@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3 class="page-title">Edit Buku</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="images">Cover</label>
                            <input type="file" name="cover" class="form-control" />

                             <img src="{{ asset('storage/images/' . $buku->cover) }}" alt="{{ $buku->nama }}"
                                            width=100>
                            @error('images')

                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                        <div class="form-group mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="judul" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                name="judul" value="{{ old('judul') ?? $buku->judul }}" />
                            @error('judul')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategori_id" class="form-label">Kategori</label>
                            <select name="kategori_id" id="kategori_id" class="form-select">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $k)
                                    <option value="{{ $k->id }}" {{ $buku->kategori_id == $k->id ? 'selected' : '' }}>{{ $k->nama }}</option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="penulis" class="form-control @error('penulis') is-invalid @enderror" id="penulis"
                                name="penulis" value="{{ old('penulis') ?? $buku->judul }}" />
                            @error('penulis')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="penerbit" class="form-control @error('penerbit') is-invalid @enderror"
                                id="penerbit" name="penerbit" value="{{ old('penerbit') ?? $buku->judul }}" />
                            @error('penerbit')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="flex">
                            <button type="submit" class="btn btn-primary">
                                <span class="ti ti-send me-1"></span>
                                Simpan
                            </button>

                            <a href="{{ route('buku.index') }}" class="btn btn-secondary">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
