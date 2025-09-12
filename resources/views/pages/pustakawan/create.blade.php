@extends('layouts.app')

@section('title', 'Tambah Pustakawan')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3 class="page-title">Tambah Pustakawan</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pustakawan.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama"
                                name="Nama" value="{{ old('Nama') }}" />
                            @error('Nama')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <input type="Alamat" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat"
                                name="Alamat" value="{{ old('Alamat') }}" />
                            @error('Alamat')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="Telepon" class="form-label">Telepon</label>
                            <input type="Telepon" class="form-control @error('Telepon') is-invalid @enderror" id="Telepon"
                                name="Telepon" value="{{ old('Telepon') }}" />

                            @error('Telepon')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="Jabatan" class="form-label">Jabatan</label>
                            <input type="Jabatan" class="form-control @error('Jabatan') is-invalid @enderror" id="Jabatan"
                                name="Jabatan" value="{{ old('Jabatan') }}" />

                            @error('Jabatan')
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

                            <a href="{{ route('pustakawan.index') }}" class="btn btn-secondary">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
