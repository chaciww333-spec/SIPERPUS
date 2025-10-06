@extends('layouts.guest')

@section('title', 'Form Anggota')

@section('content')
<head>
    <style>
         body {
            background: url("{{ asset('/storage/images/welcome%20siperpus.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #000;
        }
        .btn-simpan {
            display: inline-block;
            padding: 9px 17px;
            background: #e83e8c;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            margin-top: 20px;
            transition: 0.3s;
        }
    </style>
</head>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; 
padding-top: 20px; padding-bottom: 20px;">
        <div class="col-md-6 col-lg-5">
           <div class="card" style="background-color:rgba(255, 255, 255, 0.85); border: none; box-shadow: 0 4px 10px rgba(0, 0, 0, 0. 1);">
            <h3 class="text-center mb-0">Form Anggota</h3>
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
                            <button type="submit" class="btn" style="background-color:#e83e8c; color:white;">
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
