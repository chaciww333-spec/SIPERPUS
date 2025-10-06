@extends('layouts.anggota')

@section('content')
<div class="container">

    {{-- Header ucapan selamat datang --}}
    <div class="text-center mb-4">
        <h2 class="fw-bold" style="color:#e26a8d;">
            🌸 Selamat Datang, {{ $anggota->nama }}!
        </h2>
        <p class="text-muted">Senang bertemu lagi di <strong>Siperpus</strong> 💕</p>
        <hr style="width:80px; border:2px solid #f2a7b3; margin:auto;">
    </div>

    {{-- Kartu info anggota --}}
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card shadow-sm p-3" style="border-left: 6px solid #f8a1b2;">
                <div class="card-body">
                    <h5 class="fw-bold mb-3"><i class="bi bi-person-vcard"></i> Informasi Anggota</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>NIS:</strong> {{ $anggota->nis }}</p>
                            <p><strong>Nama:</strong> {{ $anggota->nama }}</p>
                            <p><strong>Kelas:</strong> {{ $anggota->kelas }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Jenis Kelamin:</strong> 
                                {{ $anggota->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                            </p>
                            <p><strong>No. Telepon:</strong> {{ $anggota->nomor_telepon }}</p>
                            <p><strong>Tanggal Bergabung:</strong> 
                                {{ \Carbon\Carbon::parse($anggota->tanggal_bergabung)->translatedFormat('d F Y') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Daftar Buku --}}
    <div class="text-center mb-3">
        <h4 class="fw-bold" style="color:#e26a8d;">📚 Daftar Buku Tersedia</h4>
    </div>

    <div class="row">
    @foreach($buku as $b)
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm border-0" style="background-color: #ffe6f2;">
                <div class="card-body text-center">
                    <img src="{{ asset('storage/images/' . $b->cover) }}" 
                         alt="{{ $b->judul }}" 
                         style="height: 260px; object-fit: cover; width: 100%; border-radius: 10px;">
                    <h6 class="fw-bold mt-2 text-truncate">{{ $b->judul }}</h6>
                    <p class="text-muted mb-0">{{ $b->penulis }}</p>
                     <p class="text-muted mb-0">{{ $b->penerbit }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

</div>
@endsection
