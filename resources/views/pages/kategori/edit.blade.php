@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3 class="page-title">Edit Kategori</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama') ?? $kategori->nama }}" />
                            @error('nama')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="slug" class="form-control @error('Alamat') is-invalid @enderror" id="slug"
                                name="slug" value="{{ old('slug') ?? $kategori->slug }}" />
                            @error('slug')
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

                            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
