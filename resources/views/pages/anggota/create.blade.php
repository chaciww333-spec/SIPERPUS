@extends('layouts.guest')

@section('title', 'Form Anggota')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3 class="page-title">Form Anggota</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('anggota.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="nis" class="form-label">Nis</label>
                            <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis"
                                name="nis" value="{{ old('nis') }}" />
                            @error('nis')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama') }}" />
                            @error('nama')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="kelas" class="form-control @error('kelas') is-invalid @enderror"
                                id="kelas" name="kelas" />

                            @error('kelas')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="jenis_kelami">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input"
                                 name="jenis_kelamin" id="jenis_kelamin_l" value="L">
                                 <label for="jenis_kelamin_l" class="form-check-label">Laki-laki</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input"
                                 name="jenis_kelamin" id="jenis_kelamin_p" value="P">
                                 <label for="jenis_kelamin_p" class="form-check-label">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                                 <span class="text-danger">{{ $message }}</span>
                            @enderror

                        <div class="form-group mb-3">
                            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                            <input type="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror"
                                id="nomor_telepon" name="nomor_telepon" />

                            @error('nomor_telepon')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal_bergabung" class="form-label">Tanggal Bergabung</label>
                            <input type="date" class="form-control @error('tanggal_bergabung') is-invalid @enderror"
                                id="kelas" name="tanggal_bergabung" />

                            @error('tanggal_bergabung')
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

                            <a href="{{ route('admin.index') }}" class="btn btn-secondary">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
